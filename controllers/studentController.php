<?php
//importation des fichier
include '../models/etudiant.php';

$event = $_GET['event'];

if ($event == 'add') {  
    //creation d'un objet
    $etudiant = new Etudiant();

    //récupération des données
    $etudiant->cin = $_POST['cin'];
    $etudiant->nom = $_POST['nom'];
    $etudiant->prenom = $_POST['prenom'];
    $etudiant->age = $_POST['age'];
    $etudiant->email = $_POST['email'];

    $etudiant->insert();
}else if ($event == "update") {
    $student = new Etudiant();

    $student->cin = $_GET['cin'];
    $student->nom = $_POST['nom'];
    $student->prenom = $_POST['prenom'];
    $student->age = $_POST['age'];
    $student->email = $_POST['email'];

    $student->update();
}else if ($event == 'delete') {    
    $cin = $_GET['cin'];
    Etudiant::delete($cin);
}
?>