<?php

class MySQL{
  private $pdo;

  public function __construct(){
    $hostname = 'localhost';
    $database = 'controle_orcamentos';
    $username = 'root';
    $password = '123456';
    try
    {
        $this->$pdo = new PDO( 'mysql:host=' . $hostname . ';dbname=' . $database, $username, $password );
        
        return $this->pdo;
    }
    catch ( PDOException $e )
    {
        echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
    }
  }

  public function getData($sql){
    $res = array();
    $cmd = $this->$pdo->query($sql);
    $res = $cmd->fetchAll(PDO::FETCH_ASSOC);

    return $res;
  }

  public function insertData($sql){
    $this->$pdo->query($sql);
  }
}

