# Système de Gestion de Bibliothèque

Ce projet est un système de gestion de bibliothèque permettant aux utilisateurs de rechercher des livres, de les emprunter, et de les retourner. Les administrateurs peuvent gérer les livres, les membres, et surveiller les emprunts et les retours. Le backend est implémenté en PHP et suit les principes de la programmation orientée objet (POO).

---

## Fonctionnalités

### Utilisateur
- **Rechercher un livre** : Permet à l'utilisateur de rechercher des livres en fonction de différents critères (titre, auteur, catégorie).
- **Emprunter un livre** : Permet à l'utilisateur d'emprunter un livre disponible en soumettant une demande.
- **Retourner un livre** : Permet à l'utilisateur d'enregistrer un retour pour un livre qu'il a emprunté.
- **Afficher l'historique des emprunts** : Permet à l'utilisateur de consulter l'historique de ses emprunts et retours.

### Administrateur
- **Gérer les livres** : L'administrateur peut ajouter, modifier ou supprimer des livres dans la bibliothèque.
- **Gérer les membres** : L'administrateur peut gérer les comptes utilisateurs (ajouter, désactiver des comptes).
- **Suivre les emprunts et retours** : L'administrateur peut surveiller tous les emprunts et retours effectués par les utilisateurs.

---

## Diagrammes UML

### 1. Diagramme de cas d'utilisation

| Acteur          | Cas d'utilisation                                      |
|-----------------|--------------------------------------------------------|
| **Utilisateur** | - Rechercher un livre                                  |
|                 | - Emprunter un livre                                   |
|                 | - Retourner un livre                                   |
|                 | - Afficher l'historique des emprunts                   |
| **Administrateur** | - Gérer les livres (ajout, modification, suppression) |
|                 | - Gérer les membres (ajout, désactivation)             |
|                 | - Suivre les emprunts et retours                       |

### 2. Diagramme de classes

| Classe                   | Attributs                                         | Méthodes                                            |
|--------------------------|---------------------------------------------------|-----------------------------------------------------|
| **Livre**                | - ID, titre, auteur, catégorie, disponibilité     | - modifierDisponibilité()                           |
| **Utilisateur**          | - ID, nom, email, listeEmprunts                   | - rechercherLivre(), emprunterLivre(), retournerLivre(), afficherHistorique() |
| **Administrateur**       | - ID, nom, email                                 | - ajouterLivre(), modifierLivre(), supprimerLivre(), gérerUtilisateurs(), surveillerEmprunts() |
| **GestionnaireBibliothèque** | - listeLivres, listeUtilisateurs                | - ajouterLivre(), modifierLivre(), supprimerLivre(), rechercherLivre(), gérerEmprunts() |

---

## Architecture et Design

### Classes et Héritage

- **Livre** : Contient les informations liées à un livre. 
  - Méthodes principales : `modifierDisponibilité()`.
  
- **Utilisateur** : Contient les informations de l'utilisateur ainsi que ses emprunts.
  - Méthodes principales : `rechercherLivre()`, `emprunterLivre()`, `retournerLivre()`, `afficherHistorique()`.
  
- **Administrateur** : Une classe d'administration pour gérer les livres et les utilisateurs.
  - Méthodes principales : `ajouterLivre()`, `modifierLivre()`, `supprimerLivre()`, `gérerUtilisateurs()`, `surveillerEmprunts()`.

- **GestionnaireBibliothèque** : La classe principale qui orchestre la gestion des livres, des utilisateurs et des emprunts.
  - Méthodes principales : `ajouterLivre()`, `modifierLivre()`, `supprimerLivre()`, `rechercherLivre()`, `gérerEmprunts()`.

### Polymorphisme
Le polymorphisme peut être utilisé dans les cas où différentes actions sur les livres ou les utilisateurs peuvent être traitées de manière générique. Par exemple, la méthode `modifierLivre()` pourrait avoir différentes implémentations selon le type de modification effectuée (ajout, suppression, ou modification des attributs d'un livre).

---

## Implémentation Backend (PHP)

### 1. Gestion des Livres
Les fonctions suivantes sont implémentées pour gérer les livres :
- **ajouterLivre()** : Permet à un administrateur d'ajouter un livre à la bibliothèque.
- **modifierLivre()** : Permet à un administrateur de modifier les informations d'un livre existant.
- **supprimerLivre()** : Permet à un administrateur de supprimer un livre de la bibliothèque.

### 2. Gestion des Emprunts et Retours
Les emprunts et retours sont gérés à l'aide de tableaux associatifs en PHP. Chaque utilisateur a une liste d'emprunts, et l'historique des emprunts et des retours est également stocké.

### 3. Validation des Emprunts
Le système valide les emprunts pour éviter les doublons. Un livre ne peut être emprunté que si il est disponible.

### 4. Historique des Emprunts
Un tableau est utilisé pour stocker l'historique des emprunts et retours des utilisateurs. Ce tableau permet à l'utilisateur de voir tous les livres qu'il a empruntés ou retournés.

---

## Critères de Performance

- **Respect des concepts UML** : Le code suit les diagrammes de cas d'utilisation et de classes.
- **Bonne structuration des classes avec héritage et polymorphisme** : Le système est conçu avec une hiérarchie claire et des principes de POO respectés.
- **Implémentation des fonctionnalités principales** : Les fonctionnalités principales comme les emprunts, les retours et la gestion des livres sont bien implémentées et fonctionnelles.

---

## Modalités Pédagogiques

### 1. Diagramme de Cas d'Utilisation
Durée : 20 minutes  
Objectif : Décrire les actions principales des utilisateurs et des administrateurs dans le système.

### 2. Diagramme de Classes
Durée : 40 minutes  
Objectif : Définir les classes nécessaires et leurs relations (attributs, méthodes).

### 3. Implémentation des Classes et Relations
Durée : 30 minutes  
Objectif : Créer les classes et implémenter les relations entre elles.

### 4. Ajout de l'Héritage et du Polymorphisme
Durée : 30 minutes  
Objectif : Améliorer la structure du code en introduisant l'héritage et le polymorphisme.

---

## Installation et Déploiement

1. Clonez ce repository :
   ```bash
   git clone https://github.com/rayan4-dot/Library_management_workshop.git
