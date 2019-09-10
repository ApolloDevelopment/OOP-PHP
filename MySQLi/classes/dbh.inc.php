<?php

class Dbh
{
  protected $server;
  protected $user;
  protected $password;
  protected $db;

  public function connect()
  {
    $this->server = "localhost";
    $this->user = "root";
    $this->password = "";
    $this->db = "oop-php-mysqli";

    $conn = new mysqli($this->server, $this->user, $this->password, $this->db);
    return $conn;
  }
}