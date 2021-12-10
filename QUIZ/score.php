<?php include './init.php';  ?>

<?php include './views/includes/header.php' ?>

<main>
    <div class="container">
        <h2>Congratu:ation You're done</h2>
        <p> Your Score is : <?= $_SESSION['score']  ?></p>
    </div>
</main>

<?php
if (isset($_SESSION['score'])) {

    unset($_SESSION['score']);
}
?>

<?php include './views/includes/footer.php' ?>