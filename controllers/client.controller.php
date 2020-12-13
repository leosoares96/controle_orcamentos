<?php
require_once('./config/conn.class.php');
include_once('./models/client.class.php');

$conn = new MySQL(); 

function insertData(
  $name,
  $email,
  $cpf,
  $cep,
  $logradouro,
  $bairro,
  $cidade,
  $uf,
  $numero
){
  if( 
      isset($name) &&
      isset($name) &&
      isset($email) &&
      isset($cpf) &&
      isset($cep) &&
      isset($logradouro) &&
      isset($bairro) &&
      isset($cidade) &&
      isset($uf) &&
      isset($numero)  
    ) 
  {
    
    try {
      $client = new Client();
      $client->setName($name);
      $client->setEmail($email);
      $client->setCpf($cpf);
      $client->setCep($cep);
      $client->setLogradouro($logradouro);
      $client->setBairro($bairro);
      $client->setCidade($cidade);
      $client->setUf($uf);
      $client->setNumero($numero);

      global $conn;

      $query ='
      INSERT INTO table_client(name,email,cpf,cep,logradouro,bairro,cidade,uf,numero)
      VALUES
        (
          "'.$client->getName($name).'",
          "'.$client->getEmail($email).'",
          "'.$client->getCpf($cpf).'",
          "'.$client->getCep($cep).'",
          "'.$client->getLogradouro($logradouro).'",
          "'.$client->getBairro($bairro).'",
          "'.$client->getCidade($cidade).'",
          "'.$client->getUf($uf).'",
          "'.$client->getNumero($numero).'"
        )
    ';
      $conn->insertData($query);
    } catch (Exception $err) {
      return 'Exceção capturada: ' .  $err->getMessage();
    }
  } 
  
}

function returnData(){
  
  global $conn;
  $result = $conn->getData(
    'SELECT * FROM table_client ORDER BY name'
  );
    
 return $result; 
}