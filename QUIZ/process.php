<?php
include './init.php';


if (isset($_POST['submit'])) {

    $selected = $_POST['choice'];
    $nbr = (int)$_POST['currentid'];
    $next = $nbr + 1;

    $sql = "SELECT * from `questions`";
    $result = $connexion->query($sql);
    $total = $result->num_rows;

    $statement = "SELECT text FROM `choice` WHERE question_id=$nbr AND is_correct=1";
    $res = $connexion->query($statement);
    $data = $res->fetch_assoc();



    if ($nbr === $total) {

        header('Location: score.php');
    } else {
        header('Location: question.php?n=' . $next);
    }

    if ($selected === $data['text']) {

        $_SESSION['is_correct'] = "correct";
        $_SESSION['score']++;
    }
}
