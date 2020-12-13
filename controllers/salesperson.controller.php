<?php
require_once('./config/conn.class.php');
include_once('./models/salesperson.class.php');

$conn = new MySQL(); 

function insertData($name, $email){
  if ( isset($name) && isset($email)) {
    
    try {
      $salesperson = new Salesperson();
      $salesperson->setName($name);
      $salesperson->setEmail($email);

      global $conn;
      $conn->insertData(
        '
          INSERT INTO table_salesperson(name,email) 
          VALUES
            ("'.$salesperson->getName().'","'.$salesperson->getEmail().'")
        '
      );
    } catch (Exception $err) {
      return 'Exceção capturada: ' .  $err->getMessage();
    }
  } 
  
}

function returnData(){
  
  global $conn;
  $result = $conn->getData(
    'SELECT * FROM table_salesperson ORDER BY name'
  );
    
 return $result; 
}