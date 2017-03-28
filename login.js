 $(function){
    $("#fname_err_msg").hide();
    $("#sname_err_msg").hide();
    $("#mobile_err_msg").hide();
    $("#email_err_msg").hide();
    $("#username_err_msg").hide();
    $("#pwd_err_msg").hide();

   var error_fname = false;
   var error_sname = false;
   var error_mobile = false;
   var error_email = false;
   var error_username = false;
   var error_pswd = false;

  $("#fname").focusout(function(){
     alert("fnkj");
    });

  $("#sname").focusout(function(){
   check_sname();
    });

  $("#mobile").focusout(function(){
   check_mobile();
    });

  $("#email").focusout(function(){
   check_email();
    });

  $("#uname").focusout(function(){
   check_uname();
    });

  $("#pswd").focusout(function(){
   check_pswd();
    });
 function check_fname(){
  var fname_length= $("#fname").val().length;
  $("fname_err-msg"(.html("should be between 3-10 characters");
  $("fname_err_msg).show();
   error_fname=true;
}
else{
 $("fname_err_msg").hide();
}  
}

}