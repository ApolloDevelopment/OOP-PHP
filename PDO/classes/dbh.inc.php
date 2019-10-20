<?php

class Dbh
{
  private $serverName;
  private $username;
  private $password;
  private $dbName;
  private $charset;

  public function connect()
  {
    $this->serverName = "localhost";
    $this->username = "root";
    $this->password = "";
    $this->dbName = "oop-php-pdo";
    $this->charset = "utf8mb4";

    // Displays error if connection fails
    try {
      $dsn = "mysql:host=".$this->serverName.";dbname=".$this->dbName.";charset=".$this->charset;
      $pdo = new PDO($dsn, $this->username, $this->password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
    } catch (PDOException $e) {
      echo "Connection failed: ".$e->getMessage();
    }
  }
}