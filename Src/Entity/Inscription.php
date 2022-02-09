<?php 

namespace App\Entity;

use DateTime;

class Inscription{
    private DateTime $date;
    
    private Etudiant $etudiant;

    public function getDate():DateTime{
        return $this->date;
    }

    public function setDate($date):void{
        $this->dateCreation=$date;
    }

    public function __construct()
    {
        $this->date=new DateTime;
    }




public function getEtudiant():Etudiant{
    return $this->etudiant;
}

public function setEtudiant($etudiant):void{
    $this->dateCreation=$etudiant;
}
}