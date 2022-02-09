<?php

require_once '/var/www/cours-poo-mvc/config/Constantes.php';
use App\Core\Orm\DataBase;
use App\Entity\Inscription;
use App\Entity\Personne;
use App\Entity\Etudiant;
require_once "./../vendor/autoload.php";
/* $p=new Etudiant();
$p->addInscription(new Inscription);
$p->addInscription(new Inscription);
$p->addInscription(new Inscription);
$inscription=$p->getInscription();


foreach ($inscription as $key => $ins) {
   var_dump($ins->getDate());
} */

$db=new DataBase();




