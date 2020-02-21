<?php
include '../models/etudiant.php';

$cin = $_GET['cin'];

$student = new Etudiant();

$student->nom = $_POST['nom'];
$student->prenom = $_POST['prenom'];
$student->age = $_POST['age'];
$student->email = $_POST['email'];

$student->update($cin);

?>