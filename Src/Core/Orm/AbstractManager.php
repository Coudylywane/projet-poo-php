<?php 
namespace App\Core\Orm;

abstract class AbstractManager extends AbstractObject implements ManargerInterface{


  public function __construct()
  {
    
  }
 
public function remove($id):int{
  $sql="delete from $this->tableName where $this->primaryKey=?";
  return $this->database->executeUpdate($sql,[$id]);
}
   
    public  function persist(array $model , int $id=null):int{
      if (isset($model[$this->primaryKey])) {
       return $this->update($model);
      }else {
        return $this->insert($model);
      }
   }
   
}