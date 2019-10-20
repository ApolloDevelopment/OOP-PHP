<?php

class Person
{
  var $name;
  public $height;
  protected $social_insurance;
  private $pinn_number;


  function __construct($persons_name)
  {
    $this->name = $persons_name;
  }

  function set_name($new_name)
  {
    $this->name = $new_name;
  }

  function get_name()
  {
    return $this->name;
  }

  private function get_pinn_number()
  {
    return $this->pinn_number;
  }
}

//Current Step: 14
//URL: https://www.killerphp.com/tutorials/php-objects-page-3/