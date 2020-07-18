$(document).ready(function () {
  var formInputs = $('input[type="email"],input[type="password"]');
  formInputs.focus(function () {
    $(this).parent().children("p.formLabel").addClass("formTop");
    $("div#formWrapper").addClass("darken-bg");
    $("div.logo").addClass("logo-active");
  });
  formInputs.focusout(function () {
    if ($.trim($(this).val()).length == 0) {
      $(this).parent().children("p.formLabel").removeClass("formTop");
    }
    $("div#formWrapper").removeClass("darken-bg");
    $("div.logo").removeClass("logo-active");
  });
  $("p.formLabel").click(function () {
    $(this).parent().children(".form-style").focus();
  });
  $("#btn_submit").click(function () {
    var email = $("#email").val().trim();
    var password = $("#password").val().trim();

    if (email != "" && password != "") {
        $.ajax({
          url: "http://localhost:3000/1",
          type: "POST",
          dataType: "json",
          success: function (data) {
            $.each(data, function (key, value) {
              console.log(value);

              if (email == value.email && password == value.password) {
                error = false;
              }
            });
            if (error == false) {
              document.location = "./../index.html";
            }
          },
        });

    }
  });
});
