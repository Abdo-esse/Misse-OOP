<?php 
require 'Utilisateur.php';
class Administrateur extends Utilisateur
{
    private $role;
    public function __construct($nom,$emaile,$role){
        new Utilisateur($nom,$emaile);
        $this->role=$role;
    }
    public function getRole()
    {
        return  $this->role
    }

    public function setRole($role)
    {
         $this->role=$role
    }
   // __tostring auteur
   public function afficherAdministrateur(){
    return parent::afficherDetails() ." de biographie {$this->role}";
}
}