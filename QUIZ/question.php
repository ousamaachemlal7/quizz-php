<?php

include './init.php';

$current = (int) $_GET['n'];
// debug($current);

$statement = "SELECT Text from `questions` WHERE question_id=$current";
$query = $connexion->query($statement) or die($connexion->error . __LINE__);
$data = $query->fetch_assoc();


$strt = "SELECT * from `questions`";
$result = $connexion->query($strt);
$total = $result->num_rows;


$state = "SELECT * from `choice` WHERE question_id=$current";
$choices = $connexion->query($state);

?>

<?php include './views/includes/header.php'; ?>

<main>
    <div class="container">
        <div class="current"><?= $data['Text']  ?></div>
        <p class="question">
            <?= ' Question ' . $current . ' of ' . $total  ?>
        </p>

        <form method="POST" action="process.php">

            <ul class="choices">

                <?php while ($rows = $choices->fetch_assoc()) :  ?>
                    <li>
                        <input type='radio' name="choice" value="<?= $rows['text'] ?>" />
                        <?= $rows['text'] ?>
                    </li>
                <?php endwhile;   ?>

            </ul>

            <input type="submit" value="submit" name="submit" />
            <input type="hidden" name="currentid" value="<?= $current ?>" />


        </form>

        <?php
        if (!isset($_SESSION['score']) && !isset($_SESSION['is_correct'])) {

            $_SESSION['score'] = 0;
        }

        ?>
    </div>
</main>

<?php include './views/includes/footer.php';  ?>