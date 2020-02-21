<?php

$cin = $_GET['cin'];
include '../models/etudiant.php';
Etudiant::delete($cin);

?>