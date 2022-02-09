<?php 

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Etudiant extends Personne {
    private string $tuteur;
    public ArrayCollection $inscription;

    public function getInscription():ArrayCollection{
        return $this->inscription;
    }
    public function setInscription($inscription):void{
        $this->inscription=$inscription;
    }

    public function getTuteur():string{
        return $this->tuteur;
    }
    
    public function setTuteur($tuteur):void{
        $this->tuteur=$tuteur;

    }

    public function __construct()
    {
        $this->inscription=new ArrayCollection();
    }
public function addInscription(Inscription $inscription):self{
    if (!$this->inscription->contains($inscription)) {
        $this->inscription->add($inscription);
        $inscription->setEtudiant($this);
       
    }
    return $this;
}

public function removeInscription(Inscription $inscription):self{
    if ($this->inscription->contains($inscription)) {
        $inscription->setEtudiant(null);
        $this->inscription->removeElement($inscription);
      
       
    }
    return $this;
}
  

}