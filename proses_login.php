<?php
  session_start();
  $user = $_POST['username'];
  $pass = $_POST['password'];
  $_SESSION['username'] = $user;
  $_SESSION['password'] = $pass;

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

  if ($_SESSION['username'] == $user[0]['user'] && $_SESSION['password'] == $user[0]['pass'] ||
      $_SESSION['username'] == $user[1]['user'] && $_SESSION['password'] == $user[1]['pass']
      ) {
    header("location: halaman_belanja.php");
  }else {
    header("location: formawal.html");
  }
?>
