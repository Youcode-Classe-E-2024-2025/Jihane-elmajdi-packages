<?php
include('connexion.php');
if (isset($_POST["submit"])) {
    $nomdepackage = $_POST["namePackage"];
    $auteurs = $_POST["nameautor"];
    $versions = $_POST["versions"];
    $description = $_POST["description"];

    $query  = "INSERT INTO `packages`(`nom`,`version`,`déscription`,`auteur_id`) value ('$nomdepackage','$versions',' $description','$auteurs')";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("erreur " . mysqli_query($connection));
    } else {

        header(header: 'location:index.php');
    }
}
