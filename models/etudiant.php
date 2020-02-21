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
            header('location:../views/studentsList.php');
        }else{
            echo "error";
        }

    }

    public static function all(){
        //connexion a la base de donnée
        $base = connect_to_db();

        //preparatiopn de la requette sql
        $requette = "select * from etudiant";

        //selection des données ( exec du requette )
        $data = $base->query($requette);

        return $data;
    }

    public static function studentInfo($cin){
        //connexion a la base de donnée
        $base = connect_to_db();

        //preparatiopn de la requette sql
        $requette = "select * from etudiant where cin = '$cin'";

        //selection des données ( exec du requette )
        $data = $base->query($requette);

        return $data;
    }

    public static function delete($cin){
        //connexion a la base de donnée
        $base = connect_to_db();

        //preparatiopn de la requette sql
        $requette = "delete from etudiant where cin = '$cin'";

        //insertion des données ( exec du requette )
        $nbligne = $base->exec($requette);

        //affichage resultat de l'insertion
        if ($nbligne == 1) {
            header('location:../views/studentsList.php');
        }else{
            echo "error";
        }

    }

    public function update($cin){
        //connexion a la base de donnée
        $base = connect_to_db();

        //preparatiopn de la requette sql
        $requette = "update etudiant 
                    set nom='$this->nom' , 
                    prenom ='$this->prenom' ,
                    age = $this->age ,
                    email = '$this->email'
                    where cin = '$cin'";

        //insertion des données ( exec du requette )
        $nbligne = $base->exec($requette);

        //affichage resultat de l'insertion
        if ($nbligne == 1) {
            header('location:../views/studentsList.php');
        }else{
            echo "error";
        }

    }
}

?>