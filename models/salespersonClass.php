<?php


class Salesperson
{

  private $nome;
  private $email;

  function setNome($nome)
  {
    $this->nome = $nome;
  }
  function getNome()
  {
    return $this->nome;
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
