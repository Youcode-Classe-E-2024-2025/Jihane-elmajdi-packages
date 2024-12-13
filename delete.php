<?php
include("connexion.php");
$id = $_GET["id"];
$query = "DELETE FROM auteurs WHERE `id`= $id";
$result = mysqli_query(mysql: $connection, query: $query);
if (!$result) {
    die("Erreur " . mysqli_error($connection));
} else {
    header('location:index.php');
}
