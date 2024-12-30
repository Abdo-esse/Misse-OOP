<?php 
require 'Utilisateur.php';
class Ateur extends Utilisateur
{
    private $biographie;
   
    public function __construct($nom,$emaile,$biographie){
        new Utilisateur($nom,$emaile);
        $this->biographie=$biographie;
    }
    public function getBiographie()
    {
        return  $this->biographie
    }

    public function setBiographie($biographie)
    {
         $this->biographie=$biographie
    }
    // __tostring auteur
    public function afficherAuteurs(){
        return parent::afficherDetails() ." de biographie {$this->biographie}";
    }
}