<?php
include("../model/CustomerSession.php");
include("layout/header.php");
?>

<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title>Registration Form</title>
  </head>

  <body>
    <center>
      <h1>Register</h1>
      </br>
      <table>
        <form action='../controller/registerForm.php' method=post>
          <tr><td>Email</td><td><input required type=email name='email'></td></tr>
          <tr><td>Password</td><td><input required type=password name='password'></td></tr>
          <tr><td></td><td></td></tr>
          <tr><td><input type="submit" value="Submit"></td>
            <td><input type="reset" value="Reset"></td></tr>
          </form>
        </table>
      </center>
    </body>
</html>
