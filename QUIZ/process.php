<?php

include './init.php';

if(!isset($_SESSION['score'])){
    $_SESSION['score'] =0;
}

if(isset($_POST['submit'])){
    echo "is submitted";
}