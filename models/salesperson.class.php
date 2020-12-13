<?php


class Salesperson
{

  private $name;
  private $email;

  function setName($name)
  {
    $this->name = $name;
  }
  function getName()
  {
    return $this->name;
  }
  function setEmail($email)
  {
    $this->email = $email;
  }
  function getEmail()
  {
    return $this->email;
  }
}
?>