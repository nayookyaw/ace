function showContact() {
  $('#display_contact').empty();
  $.ajax({
    type : 'GET',
    url : '/showcontactdetails',
    success : function (data) {
      $data = data.data;
      console.log ($data);
      if ($data.length == 0){
        html = "<tr><td> None </td></tr>";
      }
      else{
        $data.forEach(function ($val) {
          html =
          "<tr><td>" + $val['firstname'] + "</td><td> "+ $val['lastname']+ "</td><td> "+ $val['age']+ "</td><td>" + $val['email'] + "</td><td> "+ $val['phone']+ "</td><td> "+ $val['subject']+ "</td><td>" + $val['message'] + "</td></tr>";
          $('#display_contact').append(html);
        });
      }
    },
    error : function (error){
      console.log (error);
    }
  });
}
window.onload = showContact;
