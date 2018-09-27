<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <form  action="login.php" method="post">
      <center>
      <h1>login</h1>
      <table>
        <tr>
          <td>Username:</td>
          <td><input type="text" name="user"></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="pass"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="submit" value="login"> </td>
        </tr>

      </table>
      </center>
    </form>
  </body>
</html>

<?php
  session_start();
  if (isset($_POST['submit'])) {
    $_SESSION['user'] = $_POST['user'];
    $_SESSION['pass'] = $_POST['pass'];

    $user = array(
                  array(
                    'user' => 'fadil',
                    'pass' => '1234'
                  ),
                  array(
                    'user' => 'dodol',
                    'pass' => '4321'
                  )

    );

    if ($_POST['user'] == $user[0]['user'] && $_POST['pass'] == $user[0]['pass'] ||
        $_POST['user'] == $user[1]['user'] && $_POST['pass'] == $user[1]['pass'] ) {
      header("location: formawal.html");
    }else {
      header("user / password salah");
    }
  }

 ?>
