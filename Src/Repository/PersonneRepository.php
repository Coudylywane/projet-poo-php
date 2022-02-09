<?php 

namespace App\Repository;

use App\Core\Orm\AbstractRepository;

abstract class PersonneRepository extends AbstractRepository{
    
    private string $role="ROLE_PERSONNE";

    public function __construct()
    {
        $this->tableName="users";
        $this->primaryKey="id_user";
    }
 
    public function findAll():array{
        $sql="select * from $this->tableName where role like $this->primaryKey ";
        return $this->database->executeSelect($sql);
    }

    /* function findAll():array{
        $sql="select * from $this->tableName";
        return $this->database->executeSelect($sql);
    }

    function findById(int $id):array{
        $sql="select * from $this->tableName where $this->primaryKey=?";
        return $this->database->executeSelect($sql, [$id]);
    }

    function findBy(string $sql , array $data ,$single=false):array{
        return $this->database->executeSelect($sql ,  $data, $single);

    } */

}