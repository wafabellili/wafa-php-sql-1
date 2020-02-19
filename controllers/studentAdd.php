<?php
include "../config/db_connector.php";

//récupération des données
$cin = $_POST['cin'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$email = $_POST['email'];

//connexion a la base de donnée
$base = connect_to_db();

//preparatiopn de la requette sql
$requette = "insert into etudiant values ('$cin','$nom','$prenom',$age,'$email')";

//insertion des données ( exec du requette )
$nbligne = $base->exec($requette);

//affichage resultat de l'insertion
if ($nbligne == 1) {
    echo "student inserted";
}else{
    echo "error";
}
?>