<?php
class Connection {
private $host = "localhost";
private $user = "root";
private $pass = '';
private $dbname = "ecommerce";
private $dsn;
public $pdo;
public function __construct() {
    $this->dsn = "mysql:host={$this->host};dbname={$this->dbname}";
    $this->pdo =  new PDO($this->dsn, $this->user, $this->pass);
 }
}

