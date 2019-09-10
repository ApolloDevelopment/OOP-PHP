<?php

//"extends" allows us to use properties/methods from the extended class that are either protected or public
class User extends Dbh
{

  protected function getAllUsers()
  {
    $sql = "SELECT * FROM users";
    $result = $this->connect()->query($sql);
    $numRows = $result->num_rows;

    if($numRows > 0)
    {
      while($row = $result->fetch_assoc())
      {
        $data[] = $row;
      }
      return $data;
    }
    else
    {
      return "No Users Found";
    }
  }
}