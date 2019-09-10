<?php

class UserHandler extends User
{

  public function showAllUsers()
  {
    $rows = $this->getAllUsers();
    foreach($rows as $row)
    {
      echo $row['name']."<br>";
    }
  }
}