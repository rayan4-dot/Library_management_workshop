<?php
require "./vendor/autoload.php";
use App\User;

class Admin extends User{
    public function __construct($nom,$email,$password){
        $this->nom = $nom;
        $this->email = $email;
        $this->password = $password;
    }

    // mehode pour ajouter un categorie
    public function ajouterCategorie($nom_categorie){
        $sql = "insert into categories (nom_categorie) values :nom_categorie";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['nom_categorie'=> $nom_categorie]);
    }

    // mehode pour modifier un categorie
    public function modifierCategorie($nom_categorie){
        $sql = "UPDATE categories SET (nom_categorie) = :nom_categorie";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['nom_categorie'=> $nom_categorie]);
    }

    // mehode pour supprimer un categorie
    public function supprimerCategorie($id){
        $sql = "DELETE FROM categories where id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['id'=>$id]);
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