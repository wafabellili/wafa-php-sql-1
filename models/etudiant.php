<?php
include "../config/db_connector.php";
class Etudiant{

    public $cin ;
    public $nom ;
    public $prenom ;
    public $age ;
    public $email ;

    public function insert(){
        //connexion a la base de donnée
        $base = connect_to_db();

        //preparatiopn de la requette sql
        $requette = "insert into etudiant values ('$this->cin','$this->nom','$this->prenom',$this->age,'$this->email')";

        //insertion des données ( exec du requette )
        $nbligne = $base->exec($requette);

        //affichage resultat de l'insertion
        if ($nbligne == 1) {
            echo "student inserted";
        }else{
            echo "error";
        }

    }
}

?>