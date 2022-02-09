<?php
namespace App\Repository;

class PersonneRepository{
    private string $role="ROLE_Etudiant";
    public function __construct()
    {
        $this->tableName="user";
        $this->primaryKey="id";
    }
}