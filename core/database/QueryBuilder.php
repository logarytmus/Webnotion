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
    $statement = $this->pdo->prepare("select u.name,u.surname,u.password, roles.role from {$table} as u 
      join role_user ON u.id = role_user.user_id
      join roles ON role_user.role_id = roles.id
      where u.email=?");
    $statement->execute([$email]);
    return $statement->fetchAll();
  }

}