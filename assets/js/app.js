var BASE_DIR = 'internshala';
var BASE_URL = window.location.protocol+ '//' + window.location.hostname + '/' + BASE_DIR + '/';

$(document).ready(function(){

    //--------------------------FORM FIELDS VALIDATION START------------------------------------------
    

    $mail_validated_login = false;
    $mail_validated = false;
    $password_validated = false;
    $password_validated_final = false;
    $password_validated_login = false;
    $fname_validated = false;
    $lname_validated = false;

    var $regexmail=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
    // var $regexname=/^([a-zA-Z]{3,16})$/;
    $('.email-input-login').on('keypress keydown keyup',function(){
         if (!$(this).val().match($regexmail)) {
             // there is a mismatch, hence show the error message
             $('.errmsg-mail-login').removeClass('hidden');
             $('.errmsg-mail-login').show();
             // $('#login-btn').prop('disabled', true);
             $mail_validated_login = false;
         }
         else{
            // else, do not display message
            $('.errmsg-mail-login').addClass('hidden');
            $mail_validated_login = true;
         }
    });
    $('.email-input').on('keypress keydown keyup',function(){
         if (!$(this).val().match($regexmail)) {
          // there is a mismatch, hence show the error message
             $('.errmsg-mail').removeClass('hidden');
             $('.errmsg-mail').show();
             // $('#signup-btn').prop('disabled', true);
             $mail_validated = false;
         }
         else{
            // else, do not display message
            $('.errmsg-mail').addClass('hidden');
            // $('#signup-btn').prop('disabled', false);
            $mail_validated = true;
         }
    });

    var $regexpass=/^[0-9a-zA-Z]{8,}$/;
    $('.password-input-login').on('keypress keydown keyup',function(){
         if (!$(this).val().match($regexpass)) {
          // there is a mismatch, hence show the error message
             $('.errmsg-password-login').removeClass('hidden');
             $('.errmsg-password-login').show();
             // $('#login-btn').prop('disabled', true);
             $password_validated_login = false;
         }
         else{
            // else, do not display message
            $('.errmsg-password-login').addClass('hidden');
            // $('#login-btn').prop('disabled', false);
            $password_validated_login = true;
         }
    });
    $('.password-input').on('keypress keydown keyup',function(){

         if (!$(this).val().match($regexpass)) {
          // there is a mismatch, hence show the error message
             $('.errmsg-password').removeClass('hidden');
             $('.errmsg-password').show();
             // $('#signup-btn').prop('disabled', true);
             $password_validated = false;
         }
         else if($('.cpassword-input').val() === $(this).val()){
            // else, do not display message
            $('.errmsg-password').addClass('hidden');
            // $('#signup-btn').prop('disabled', false);
            $password_validated_login = true;
         }else{
            // there is a mismatch, hence show the error message
             $('.errmsg-password').addClass('hidden');
             $('.errmsg-cpassword').removeClass('hidden');
             $('.errmsg-cpassword').show();
             // $('#signup-btn').prop('disabled', true);
             $password_validated_final = false;
         }
       
    });

    var $regexname=/^([a-zA-Z]{3,16})$/;
    $('.fname-input').on('keypress keydown keyup',function(){
         if (!$(this).val().match($regexname)) {
          // there is a mismatch, hence show the error message
             $('.errmsg-fname').removeClass('hidden');
             $('.errmsg-fname').show();
             // $('#signup-btn').prop('disabled', true);
             $fname_validated = false;
         }
         else{
            // else, do not display message
            $('.errmsg-fname').addClass('hidden');
            // $('#signup-btn').prop('disabled', false);
            $fname_validated = true;
         }
    });
     $('.lname-input').on('keypress keydown keyup',function(){
         if (!$(this).val().match($regexname)) {
          // there is a mismatch, hence show the error message
             $('.errmsg-lname').removeClass('hidden');
             $('.errmsg-lname').show();
             // $('#signup-btn').prop('disabled', true);
             $lname_validated = false;
         }
         else{
            // else, do not display message
            $('.errmsg-lname').addClass('hidden');
            // $('#signup-btn').prop('disabled', false);
            $lname_validated = true;
         }
    });
    
    $('.cpassword-input').on('keypress keydown keyup',function(){
      var $pass=$('.password-input').val();
      // alert(pass);
         if ($(this).val() !== $pass && !$password_validated) {
          // there is a mismatch, hence show the error message
             $('.errmsg-cpassword').removeClass('hidden');
             $('.errmsg-cpassword').show();
             // $('#signup-btn').prop('disabled', true);
             $password_validated_final = false;

         }
         else{
            // else, do not display message
            $('.errmsg-cpassword').addClass('hidden');
            // $('#signup-btn').prop('disabled', false);
            $password_validated_final = true;
         }
    });

    $('.login-form').on('keypress keydown keyup',function(){
      if($mail_validated_login && $password_validated_login)
        $('#login-btn').prop('disabled', false);
      else
        $('#login-btn').prop('disabled', true);
    });

    $('.signup-form').on('keypress keydown keyup',function(){
      if($mail_validated && $password_validated_final && $fname_validated && $lname_validated)
        $('#signup-btn').prop('disabled', false);
      else
        $('#signup-btn').prop('disabled', true);
    });

    //--------------------------FORM FIELDS VALIDATION END------------------------------------------


    //signup operation start
    $('#signup-btn').on('click', function (e){
      e.preventDefault(); 
    });

    //login operation
    $('#login-btn').on('click', function(e){
      e.preventDefault();
    });

    $('.applied_workshops').each(function(index,item){
        var id = $(item).data('id');
        $('.workshop_'+id).html('Applied');
        $('.workshop_'+id).prop('disabled', true);
    });


});
function authenticate(type){
      var data = $('.'+type+'-form').serialize();
      // alert(BASE_URL);
      $.ajax({
        type: "POST",
        url: BASE_URL + type,
        data: data , 
        success: function(msg){
          // alert( msg );
          if(msg === 'error'){
            window.location.reload();
          }else{
            window.location.href = BASE_URL + 'dashboard';
        }
        }
      });
}

function apply_to_workshop(workshop_id,stu_id){
      var data = {
                  'w_id' : workshop_id,
                  's_id' : stu_id
                  }
      $.ajax({
        type: "POST",
        url: BASE_URL + 'apply',
        data: data , 
        success: function(msg){
          // alert( msg );
          if(msg === 'success')
            window.location.href = BASE_URL + 'dashboard';
          else
            window.location.href = BASE_URL;
        }
      });

}


