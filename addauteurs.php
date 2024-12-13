<?php
include('connexion.php');
if (isset($_POST["submit"])) {
    $nomdeauteur = $_POST["nameAuthor"];
    $email = $_POST["email"];


    $query  = "INSERT INTO `auteurs`(`nom`,`email`) value ('$nomdeauteur','$email')";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("erreur " . mysqli_query($connection));
    } else {

        header(header: 'location:index.php');
    }
}
