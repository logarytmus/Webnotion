<?php

class QueryBuilder
{
  protected $pdo;


  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function selectUser($table, $email)
  {
    $statement = $this->pdo->prepare("select * from {$table} where email=?");
    $statement->execute([$email]);
    return $statement->fetchAll();
  }

}