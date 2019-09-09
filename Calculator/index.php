<?php
  session_start();
  include 'classes/Calculator.php';
  $num1 = isset($_POST['num1']) ? $_POST['num1'] : "";
  $num2 = isset($_POST['num2']) ? $_POST['num2'] : "";
  $operator = isset($_POST['operator']) ? $_POST['operator'] : "";
  $answer = "";

  if(isset($_POST['calc'])) {
    $calculator = new Calculator($num1, $num2, $operator);
    $answer = $calculator->calculate();
  }
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basic OOP PHP Calculator</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="shortcut icon" href="../img/logo.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('select');
      var instances = M.FormSelect.init(elems, options);
    });
  </script>
</head>
<body>
  <div class="container">
    <h4 class="center-align">Basic OOP Calculator - Enter your numbers</h4>
    <form class="col s12 center-align" style="margin-top: 50px;" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <div class="row">
        <div class="input-field col s6">
          <input id="num1" name="num1" type="text" class="validate">
          <label for="num1">First Number</label>
        </div>
        <div class="input-field col s6">
          <input id="num2" name="num2" type="text" class="validate">
          <label for="num2">Second Number</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <select name="operator">
            <option value="" disabled selected>Choose your option</option>
            <option value="plus">&plus;</option>
            <option value="minus">&minus;</option>
            <option value="times">&times;</option>
            <option value="divide">&divide;</option>
          </select>
          <label>Operator</label>
        </div>
      </div>
      <button name="calc" type="submit" class="waves-effect waves-light btn-large">Calculate</button>
    </form>

    <h5 style="text-align:center;" class="subtitle">Answer</h5>
    <div class="answer-box">
      <p class="answer">
        <?= $answer ?>
      </p>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="js/initialize.js"></script>
</body>
</html>