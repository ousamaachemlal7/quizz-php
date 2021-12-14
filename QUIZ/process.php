<?php
include './init.php';
if (!isset($_SESSION['score'])) {

    $_SESSION['score'] = 0;
}

if (isset($_POST['submit'])) {

    $selected = $_POST['choice'];
    $nbr = (int)$_POST['currentid'];
    $next = $nbr + 1;

    $sql = "SELECT * from `questions`";
    $result = $connexion->query($sql);
    $total = $result->num_rows;

    $statement = "SELECT * FROM `choice` WHERE question_id=$nbr AND is_correct=1";
    $res = $connexion->query($statement);
    $data = $res->fetch_assoc();

    if ($selected === $data['id']) {

        $_SESSION['score']++;
        
    }

    if ($nbr === $total) {

        header('Location: score.php');
    } else {
        header('Location: question.php?n=' . $next);
    }


}
