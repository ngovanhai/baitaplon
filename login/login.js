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
      //   $.ajax({
      //     url: "http://localhost:3000/1",
      //     type: "POST",
      //     dataType: "json",
      //     success: function (data) {
      //       $.each(data, function (key, value) {
      //         console.log(value);

      //         if (email == value.email && password == value.password) {
      //           error = false;
      //         }
      //       });
      //       if (error == false) {
      //         document.location = "./../index.html";
      //       }
      //     },
      //   });

      $.ajax({
        url: "http://localhost:3000/1",
        type: "GET",
        data: {
          format: "json",
        },
        error: function () {
          alert("loi");
        },
        dataType: "jsonp",
        success: function (data) {
          console.log(data);
          if (email == data.email && password == data.password) {
            if (data.permission == 1) {
              window.location.href = "./../admin/dashboard/index.html";
            } else if (data.permission == 2) {
              window.location.href = "https://www.facebook.com/";
              localStorage.setItem();
            }
          } else {
            $("#email").val("");
            $("#password").val("");
            $("#errors").text("sai mk hoac tk");
          }
        },
      });
    }
  });
});
