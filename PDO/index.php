<?php

include 'classes/dbh.inc.php';
include 'classes/user.inc.php';

?>

<html>
<head>
  <meta charset="utf-8">
  <title>PDO Connections</title>
</head>
<body>
  <?php
    // $object = new User;
    // $object->getAllUsers();
    $object = new Dbh;
    $object->connect();
  ?>



</body>
</html>