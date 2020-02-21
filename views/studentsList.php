<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<title>Title</title>
</head>
<body>
<?php
    //importation des fichier
    include '../models/etudiant.php';
    $data = Etudiant::all();
    require_once('navbar.html');
    ?>
    <div class="container">
        <a class="btn btn-primary my-3" href="studentAdd.php">Ajouter Etudiant</a>

        <div class="alert alert-warning d-none" id="aucunEtudiant">Aucun étudiant</div>

        <table class="table" id="students">
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
            <tbody id="myTbody">
                <?php while($student = $data->fetchObject()){ ?>
                <tr>
                    <td><?php echo $student->cin ; ?></td>
                    <td><?php echo $student->nom ; ?></td>
                    <td><?php echo $student->prenom ; ?></td>
                    <td><?php echo $student->age ; ?></td>
                    <td><?php echo $student->email ; ?></td>
                    <td>
                        <a class="btn btn-danger" href="../controllers/studentDelete.php?cin=<?php echo $student->cin ; ?>"><i class="far fa-trash-alt"></i></a>
                        <a class="btn btn-warning" href="../views/studentUpdate.php?cin=<?php echo $student->cin ; ?>"><i class="far fa-edit"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="../assets/js/studentList.js"></script>
</body>
</html>