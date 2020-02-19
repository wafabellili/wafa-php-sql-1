<?php
//importation des fichier
include '../models/etudiant.php';

//creation d'un objet
$etudiant = new Etudiant();

//récupération des données
$etudiant->cin = $_POST['cin'];
$etudiant->nom = $_POST['nom'];
$etudiant->prenom = $_POST['prenom'];
$etudiant->age = $_POST['age'];
$etudiant->email = $_POST['email'];

$etudiant->insert();


?>