<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    //importation des fichier
    include '../models/etudiant.php';
    $data = Etudiant::all();
    ?>

    <table>
        <thead>
            <tr>
                <th>cin</th>
                <th>nom</th>
                <th>prenom</th>
                <th>age</th>
                <th>email</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            <?php while($student = $data->fetchObject()){ ?>
            <tr>
                <td><?php echo $student->cin ; ?></td>
                <td><?php echo $student->nom ; ?></td>
                <td><?php echo $student->prenom ; ?></td>
                <td><?php echo $student->age ; ?></td>
                <td><?php echo $student->email ; ?></td>
                <td>
                    <a href="../controllers/studentDelete.php?cin=<?php echo $student->cin ; ?>">delete</a>
                    <a href="../views/studentUpdate.php?cin=<?php echo $student->cin ; ?>">update</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>