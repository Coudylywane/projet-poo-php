<?php
namespace App\Core\Orm;
interface RepositoryInterface{
    function findALL():array;
    function findById(int $id):array;
    function findBy(string $sql , array $data ,$single=false):array;
}