<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Update Student</title>
</head>

<body>
<?php
    //importation des fichier
    include '../models/etudiant.php';
    $cin = $_GET['cin'];
    $data = Etudiant::studentInfo($cin);
    $student = $data->fetchObject();
    ?>
    <form method="POST" action="../controllers/studentUpdate.php?cin=<?php echo $student->cin?>">
        <p>Nom : <input type="text" name="nom" value="<?php echo $student->nom ?>"></p>
        <p>Prenom : <input type="text" name="prenom" value="<?php echo $student->prenom ?>"></p>
        <p>Age : <input type="text" name="age" value="<?php echo $student->age ?>"></p>
        <p>Email : <input type="text" name="email" value="<?php echo $student->email ?>"></p>
        <input type="submit" value="Update">
    </form>
</body>

</html>