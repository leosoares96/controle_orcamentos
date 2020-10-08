<?php

include_once('../models/salespersonClass.php');

header('Content-Type: text/html; charset=utf-8');


if (isset($_POST['nome']) && isset($_POST['email'])) {
  $result = insertData($_POST['nome'], $_POST['email']);
  echo '{resultado: "' . $result . '"}';
} else {
  echo 'ocorreu um erro';
}


function insertData($nome, $email)
{
  try {

    $salesperson =  new Salesperson();
    $salesperson->setNome($nome);
    $salesperson->setEmail($email);

    return 'Inserido com sucesso';
  } catch (Exception $err) {
    return 'Exceção capturada: ' .  $err->getMessage();
  }
}
