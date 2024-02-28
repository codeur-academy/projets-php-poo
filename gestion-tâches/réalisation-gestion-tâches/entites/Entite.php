<?php

namespace entites;

class Entite
{
    private $Id;
    public function setId($Id)
    {
        $this->Id = $Id; 
    }
    public function getId()
    {
        return $this->Id;
    }
}
