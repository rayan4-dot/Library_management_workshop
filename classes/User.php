<?php

abstract class User{
    protected $id;
    protected $nom;
    protected $email;
    protected $password;
    
    abstract public function afficherHistorique();
    abstract public function emprunterLivre();
    abstract public function ajouterLivre();
    abstract public function supprimerLivre();
    abstract public function modifierLivre();
    abstract public function rechercherLivre();
    abstract public function addMember();
    abstract public function updateMember();
    abstract public function deleteMember();
    
}

?>