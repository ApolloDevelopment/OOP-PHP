<?php
  include 'class_lib.php';
  $dalton = new Person("Dalton Hatter");
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>KillerPHP's OOP PHP Course</title>
</head>
<body>
  <?php echo $dalton->get_name(); ?>
</body>
</html>