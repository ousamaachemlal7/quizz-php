<?php include './views/includes/header.php'; ?>

<main>
    <div class="container">
        <div class="current">Current Question</div>
        <p class="question">
            number of question 1/6
        </p>

        <form method="POST" action="process.php">

            <ul class="choices">
                <li>
                    <input type='radio' name="choice" value="1" />

                </li>
                <li>
                    <input type='radio' name="choice" value="1" />

                </li>
                <li>
                    <input type='radio' name="choice" value="1" />

                </li>
                <li>
                    <input type='radio' name="choice" value="1" />

                </li>
            </ul>

            <input type="submit" value="submit" name="submit" />
        </form>
    </div>
</main>

<?php include './views/includes/footer.php';  ?>