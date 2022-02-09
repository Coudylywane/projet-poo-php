<?php
namespace App\Core\Orm;
use PDO;
use PDOException;

/* class DataBase {
    private PDO $pdo;

     const WEB_ROUTE = 'http://localhost:8000/';
     private const USER_BD =  'root';
     private const PASSWORD_BD =  'coudylywane';
     private const HOST_BD = 'localhost';
    const CHAINE_DE_CONNECTION = 'mysql:dbname=cours-poo-mvc;host='.self::HOST_BD;

    private function openConnexion():PDO{
        try{    
            $options=[
             PDO::ATTR_CASE=>PDO::CASE_LOWER,
             PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,
             PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_ASSOC
            ];
             $pdo = new PDO(self::CHAINE_DE_CONNECTION, self::USER_BD, self::PASSWORD_BD, $options);
             return $pdo;
         }
         catch (PDOException $e){
              die ($e->getMessage());
         }
       }

    public function executeSelect(string $sql,$single=False, array $data=null):array{
        return [];
    }

    public function executeUpdate(string $sql, $data):int{
        return 0;

    }

    public function fermerConnexion(){
       

    }
} */



class DataBase{

    //pdo=null=> Connexion fermer 
    private PDO/* |NULL */ $pdo/* =null */;

    private const HOST_BD = 'localhost';
    private const CHAINE_DE_CONNECTION = 'mysql:dbname=cours-poo-mvc;host='.self::HOST_BD;
    private const USER_BD =  'root';
    private const PASSWORD_BD =  'coudylywane';

    public function __construct()
    {
        $this->openConnexion;
    }

   private function openConnexion(){

        //Essayer 




        try {
           if ($this->pdo==null) {
               //
             $this->pdo = new \PDO(self::CHAINE_DE_CONNECTION,self::USER_BD,self::PASSWORD_BD);
           }
           $this->pdo->setAttribute(\PDO::ATTR_CASE , \PDO::CASE_LOWER);
           $this->pdo->setAttribute(\PDO::ATTR_ERRMODE ,\PDO::ERRMODE_EXCEPTION);
           $this->pdo->setAttribute(\PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");


        } catch (\PDOException $e) {
            //capturer
            die ("DataBase connection failed" . $e->getMessage());
        }
    }


    public function executeSelect(string $sql , array $data=null , $single=false):array{
       //Requete non parametrer
          //select * from personne where id=$id
          //insert into personne(nom_complet,...,) values($nom_complet)
          //Execute requete select non parametrer $pdo->query()
          //Execute requete Mise a jour  non parametrer $pdo->exec()

        //Requete parametrer
          //select * from personne where id=? 
          //insert into personne(nom_complet,...,) values(?)
             //Execute requete parametrer $pdo->prepare()
             //1- Preparation de la requete , $statement=$pdo->prepare()
             //2- Execution de la requete , $statement->execute($data)
             //3- Recuperation des resultats => Select
                //$statement-> fetch(): un seul resultat 
                //$statement-> fetchAll(): plusieurs  resultats 
             // Exemple : 
                //1-$statement=$pdo->prepare("select * from personne where id=? and nom_complet like ?")
                //2-$statement->execute([0=>1,1=>"wane"]) / [1,"wane"]
                    //select * from personne where id=1 and nom_complet like "wane"

       
       
       
        $stm=$this->pdo->prepare($sql);
        if (is_null($data)) {
           $stm->execute();
        }else {
            $stm->execute($data);
        }

        return  $single?$stm->fetch(\PDO::FETCH_OBJ):$stm->fetchAll(\PDO::FETCH_OBJ);   
    }



    

    public function executeUpdate(string $sql , array $data):int{
        $stm=$this->pdo->prepare($sql);
        if (is_null($data)) {
         $stm->execute();
        }else {
            $stm->execute(array_values($data));

        }if (!strpos(strtolower($sql),strtolower("insert"))) {
           return $this->pdo->lastInsertId();
        }
            return $stm->rowCount();
     }

     

    public function fermerConnexion(){
        $this->pdo=null;
    }
}