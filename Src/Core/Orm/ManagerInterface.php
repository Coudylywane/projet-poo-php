<?php
namespace App\Core\Orm;

interface ManargerInterface{
   /* function insert(string $sql ,array $data):int;
   function update(string $sql, array $data,int $id):int;
   function remove(string $sql,int $id):int;
   function persist(string $sql,array $data,int $id=null):int; */

   function remove($id):int;
   //modele ou entity => Personne , Etudiant , Classe 

   function insert(array $model):int;
   function update(array $model):int;
   function persist(array $model):int;
}