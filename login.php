<?php
include("CustomerSession.php");
include("header.php");
?>

<html>
  <head>
    <title>Login Form</title>
  </head>

  <body>
    <h1>Log in</h1>
    <table>
      <form action='loginForm.php' method=post>
          <tr><td>Email</td><td><input required type=email name='email'></td></tr>
          <tr><td>Password</td><td><input required type=password name='password'></td></tr>
          
          <tr><td><input type="submit" value="Submit"></td>
          <td><input type="reset" value="Reset"></td></tr>
      </form>
    </table>
  </body>
</html>
