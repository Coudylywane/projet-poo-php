<?php
namespace App\Manager;

use App\Core\Orm\AbstractManager;

class PersonneManager extends AbstractManager {

    protected string $role;
    public function __construct()
    {
        parent::__construct();
        $this->tableName="users";
        $this->primaryKey="id_user";


    }

     public function update(array $model): int{
        $sql="UPDATE $this->tableName SET nom LIKE ?, prenom LIKE ?, password LIKE ?, login  LIKE ?,
         WHERE $this->primaryKey = ?";
        return $this->database->executeUpdate($sql , $model);
    }

    public function insert(array $model): int{
        $sql="INSERT INTO $this->tableName (nom , prenom, role , password , login)
             values(?,?,?,?,?)";
        return $this->database->executeUpdate($sql , $model);
    } 



}