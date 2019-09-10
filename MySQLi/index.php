<?php
  include 'classes/dbh.inc.php';
  include 'classes/user.inc.php';
  include 'classes/userhandler.inc.php';
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../img/logo.png">
</head>
<body>
  <?php
    $user = new UserHandler("localhost", "root", "", "oop-php-mysqli");
    $user->showAllUsers();
  ?>
  <p></p>
</body>
</html>