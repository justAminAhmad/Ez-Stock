<?php

class Db
{
  private $host = "localhost";
  private $user = "root";
  private $pwd = "";
  private $dbName = "ez_stock";

  public function connect()
  {
    try
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
    catch(Execption $e)
    {
        $error = $e->getMessage();
        echo $error;
    }
  }
}