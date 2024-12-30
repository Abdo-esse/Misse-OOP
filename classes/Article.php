<?php
class Article 
{
    private $titre;
    private $contenu;
    private $datePublication;
    private  $auteur;
     
    public function __construct($titre ,$contenu ,$datePublication=null,$nomAteur=null,$emaileAteur=null,$biographieAteur=null){
      $this->titre=$titre;
      $this->contenu=$contenu;
      $this->datePublication=$datePublication;
      $this->auteur=new Ateur($nomAteur,$emaileAteur,$biographieAteur);

    }
    public function getTitre(){
        return $this->titre;
        
       }
       public function getContenu(){
        return $this->contenu;
       }
    public function getDatePublication(){
        return $this->datePublication;
        
       }
    public function getAuteur(){
        return ;
        
       }
       
       public function setTitre($titre){
        $this->titre=$titre;
       
       }
       public function setContenue($contenu){
        $this->contenu=$contenu;
       }
       public function setContenue($datePublication){
        $this->datePublication=$datePublication;
       }

       // __tosring

       public function afficherArticle(){
          return "le titre est {$this->nom},contenu est {$this->emaile}, auteur est {$this->auteur} ,date de Publication est {$this->datePublication} ";
       }


}