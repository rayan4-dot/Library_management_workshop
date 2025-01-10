<?php
require "./vendor/autoload.php";
use App\User;

class Admin extends User{
    public function __construct($nom,$email,$password){
        $this->nom = $nom;
        $this->email = $email;
        $this->password = $password;
    }
    // mehode pour ajouter un livre
    public function ajouterLivre(){
        
    }
    // mehode pour modifier un livre
    public function modifierLivre(){

    }
    // mehode pour supprimer un livre
    public function supprimerLivre(){

    }
    // methode pour ajouter membre
    public function addMember(){

    }
    // methode pour modifier membre
    public function updateMember(){
        
    }
    // methode pour supprimer membre
    public function deleteMember(){
        
    }


}







?>