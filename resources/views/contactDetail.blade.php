<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact Details</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </head>
  <body>
    <h1>Contact Form</h1>
    <table>
      <tr>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Age</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Subject</td>
        <td>Message</td>
      </tr>
    </table><br>
    <div id="display_contact"></div>
  </body>

  <script src="{{ asset('js/contact/contactDetails.js') }}"></script>
  <link rel="stylesheet" href="/css/contactDetail.css">
</html>
