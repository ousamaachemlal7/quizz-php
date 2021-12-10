<?php

include './config/config.php';
include './views/includes/header.php';

?>

<main>
    <div class="container">
        <h2>Test your own knowledge</h2>
        <p>This is a multiple choice Quiz</p>

        <ul>
            <li><strong>Number of Questions : </strong>6</li>
            <li><strong>Type :</strong> Multiple Choice</li>
            <li><strong>Estimated time : </strong></li>
        </ul>

        <a href="question.php?n=1" class="start">Stat Quiz</a>
    </div>

</main>

<?php include './views/includes/footer.php';  ?>