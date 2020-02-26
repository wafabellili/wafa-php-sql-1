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
    $cin = $_GET['cin'];
    $data = Etudiant::studentInfo($cin);
    $student = $data->fetchObject();
    
    require_once('navbar.html');
  

    ?>
     <div class="container">
    <form method="POST" action="../controllers/studentController.php?event=update&&cin=<?php echo $student->cin?>">
    <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input class="form-control" type="text" name="nom" id="nom" value="<?php echo $student->nom ?>">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="prenom">Prenom :</label>
                    <input class="form-control" type="text" name="prenom" id="prenom" value="<?php echo $student->prenom ?>">
                </div>
            </div>
        </div>
        
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="age">Age :</label>
                    <input class="form-control" type="text" name="age" id="age" value="<?php echo $student->age ?>">
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input class="form-control" type="text" name="email" id="email" value="<?php echo $student->email ?>">
                </div>
            </div>
        </div>    
        <div class="form-row">
            <div class="col">
                <input class="btn btn-warning" type="submit" value="Update">
            </div>
        </div>     
        
    </form>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>