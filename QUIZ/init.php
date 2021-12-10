<?php

include './config/config.php';
include './helpers/function.php';

$connexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$connexion->set_charset("utf8mb4");
if ($connexion->connect_error) {

    printf("Connexion failed %s\n", $connexion->connect_error . __LINE__);
    exit();
} else {

    return true;
}
