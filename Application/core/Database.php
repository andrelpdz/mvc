<?php
namespace Application\core;

class Database{

  private $DB_NAME = 'andrelpdz';
  private $DB_USER = 'andrelpdz';
  private $DB_PASSWORD = 'AlpdzPass';
  private $DB_HOST = 'localhost';
  private $DB_PORT = 5432;

  private $conn;

  public function __construct(){
    $this->conn = mysqli_connect($this->DB_HOST,$this->DB_USER,$this->DB_PASSWORD) or die("Erro: Conexão");
    
    # Selecionar banco
    mysqli_select_db($this->conn, $this->DB_NAME) or die("Erro: Banco");
    
    # Definir charset UTF-8
    mysqli_query($this->conn,"SET NAMES 'utf8'");
    mysqli_query($this->conn,"SET character_set_connection=utf8");
    mysqli_query($this->conn,"SET character_set_client=utf8");
    mysqli_query($this->conn,"SET character_set_results=utf8");  
  }

  public function executeQuery(string $query){
    $q = mysqli_query($this->conn,$query);
    return $q;
  }
}
