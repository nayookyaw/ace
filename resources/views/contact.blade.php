<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <title>Contact Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </head>
  <body class="container">

    <h1>Contact Form</h1>
    <div class="complete"></div>
    <div class="main">
      <h4>Inquiry</h4>
      <table border="1">
        <tr>
          <td><label>First Name</label></td>
          <td><input type="text" class="first_name"><br><div class="err_firstname"></div><br></td>
        </tr>

        <tr>
          <td><label>Last Name</label></td>
          <td><input type="text" class="last_name"><br><div class="err_lastname"></div><br></td>
        </tr>

        <tr>
          <td><label>Age</label></td>
          <td>  <input type="text" class="age" maxlength="3"><br><div class="err_age"></div><br></td>
        </tr>

        <tr>
          <td><label>Email</label></td>
          <td>  <input type="text" class="email"><br><div class="err_email"></div><br></td>
        </tr>

        <tr>
          <td><label>Phone</label></td>
          <td>  <input type="text" class="phone"><br><div class="err_phone"></div><br></td>
        </tr>

        <tr>
          <td><label>Subject</label></td>
          <td>  <textarea class="subject" rows="2" cols="30"></textarea><br><div class="err_subject"></div><br></td>
        </tr>

        <tr>
          <td><label>Message</label></td>
          <td><textarea class="message" rows="2" cols="30"></textarea><br><div class="err_message"></div><br></td>
        </tr>

        <tr>
          <td><button class="confirm_contact btn btn-success">Submit</button></td>
          <td><button class="reset_contact btn btn-danger">Reset</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a href="{{ url('showcontact') }}"><button class="show_contact btn btn-info">Show</button></a></td>
        </tr>

      </table>

    </div>

  </body>
  <script src="{{ asset('js/contact/contactjs.js') }}"></script>
  <link rel="stylesheet" href="/css/contact.css">
</html>
