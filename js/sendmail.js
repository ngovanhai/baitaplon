$(document).ready(function(){
    $.validator.addMethod("valueNotEquals", function(value, element, arg){
      return arg !== value;
     }, "Value must not equal arg.");
        $("#question").validate({
            rules : {
                PostUser : {
                    required : true,
                },
                PostTitle : {
                    required : true,
                },
                PostContent : {
                    required : true,
      
                },
                PostUserAddress : {
                  required : true,
                  minlength : 10
                },
                PostUserTel : {
                    required: true,
                    minlength: 10,
                    maxlength : 10,
                    digits : true
    
                },
                PostUserMail : {
                    required: true,
                    email: true
                },
                select :  { valueNotEquals: "" }
            },
            messages :{
                select: { valueNotEquals: "Chưa chọn ngành" },
                PostUser : {
                    required : "Chưa nhập họ tên"
                },
                PostUserTel : {
                    required : "Chưa nhập số điện thoại",
                    minlength : "Số điện thoại không đúng quy định",
                    maxlength : "Số điện thoại không đúng quy định",
                    digits : "Số điện thoại không đúng quy định"
                },
                PostUserAddress : "Chưa nhập địa chỉ",
                PostTitle : {
                    required : "Chưa nhập tiêu đề hỏi",
                },
                PostContent : {
                    required : "Chưa nhập câu hỏi",
      
                    },
    
                PostUserMail : {
                    required : "Chưa nhập email",
                    email : "Sai email hoặc không đúng định dạng"
                }
    
    
            }
        });
        $('#question').submit(function(e) {
          e.preventDefault();
            if ($("#question").valid() == false) {
              return false
            } else {
              console.log($(this).serialize());
              $.ajax({
                type: "POST",
                url : "http://localhost/baitaplon/lib/email.php",
                data : $("#question").serialize(),
                success : function(data){
                  setTimeout(function(){ 
                      alert("gửi email thành công");
                      $('#question').trigger("reset");
                    },2000);
                 
              },
              error:function(){}
              })
      }		
    })
    })