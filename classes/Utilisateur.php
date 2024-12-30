<?php

class Utilisateur
{
   protected  $nom;
   protected  $emaile;


   public function __construct($nom,$emaile){
    $this->nom=$nom;
    $this->emaile=$emaile;
   }
   public function getNom(){
    return $this->nom;
   }
   public function getEmaile(){
    return $this->emaile;
   }
   public function setNom($nom){
    $this->nom=$nom;
   
   }
   public function setEmaile($emaile){
    $this->emaile=$emaile;
   }
   // __tostring
   public function afficherDetails(){
    return "le nom est {$this->nom}, l'email est {$this->emaile} ";
   }
   


}