<?php

use entites\Entite;

class Projet extends Entite
{
    private $Nom;
    private $Description;

    public function setNom($Nom)
    {
        $this->Nom = $Nom;
    }
    public function getNom()
    {
        return $this->Nom;
    }

   
}
