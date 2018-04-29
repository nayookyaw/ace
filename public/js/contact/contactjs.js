$('.confirm_contact').click(function (){

  $firstname = $('.first_name').val();
  $lastname = $('.last_name').val();
  $age = $('.age').val();
  $email = $('.email').val();
  $phone = $('.phone').val();
  $subject = $('.subject').val();
  $message = $('.message').val();

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN' : $('meta[name="csrf_token"]').attr('content')
    }
  });
  $.ajax({
    type : 'POST',
    url : '/confirmcontact',
    data : {
      firstname : $firstname,
      lastname : $lastname,
      age : $age,
      email : $email,
      phone : $phone,
      subject : $subject,
      message : $message
    },
    success : function (data){
      $('.first_name').val('');
      $('.last_name').val('');
      $('.age').val('');
      $('.email').val('');
      $('.phone').val('');
      $('.subject').val('');
      $('.message').val('');

      $('.main').empty();

      html =
        "<h4>Complete</h4><br><br><h2 class='thank'>Thank you for your inquire:)<br><br><button class='btn btn-warning'>OK</button></h2>"
      $('.complete').append(html);

    },
    error : function (error){
      $arr = [];
      if (error){
        $err = error.responseJSON.errors;
        $.each($err, function(key,value){
          $arr[key] = value;
        });
        console.log ($arr);
        $('.err_firstname').empty().append($arr['firstname']);
        $('.err_lastname').empty().append($arr['lastname']);
        $('.err_age').empty().append($arr['age']);
        $('.err_email').empty().append($arr['email']);
        $('.err_phone').empty().append($arr['phone']);
        $('.err_subject').empty().append($arr['subject']);
        $('.err_message').empty().append($arr['message']);
      }
    }
  });
});

$('.reset_contact').click(function(){
  $('.first_name').val('');
  $('.last_name').val('');
  $('.age').val('');
  $('.email').val('');
  $('.phone').val('');
  $('.subject').val('');
  $('.message').val('');
});
