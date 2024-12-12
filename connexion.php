<?php
$HOSTNAME = "localhost";
$ROOT = "root";
$PASSWORD = "";
$DATABASE = "gestion_packages";

$connection = mysqli_connect($HOSTNAME, $ROOT, $PASSWORD, $DATABASE);
if (!$connection) {
    die("Erreur de connexion");
}
