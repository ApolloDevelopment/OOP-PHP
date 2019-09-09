<?php

class Calculator
{

  //Private Properties
  private $num1;
  private $num2;
  private $operator;

  //Constructors
  public function __construct($num1, $num2, $operator){
    $this->num1 = $num1;
    $this->num2 = $num2;
    $this->operator = $operator;
  }

  //Public Methods
  public function calculate() {
    switch ($this->operator) {
      case 'plus':
        return $this->num1 + $this->num2;
        break;
      case 'minus':
        return $this->num1 - $this->num2;
        break;
      case 'times':
        return $this->num1 * $this->num2;
        break;
      case 'divide':
        return $this->num1 / $this->num2;
        break;
      default:
        return "Invalid input";
        break;
    }
  }
}