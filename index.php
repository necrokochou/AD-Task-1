<?php
$name = "Joseph Aiden Reilly C. Flores";
$age = 20;
$program = "BSITAGD";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AD-Task-1 : Profile</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <section class="image">
            <img src="./assets/img/frieren-frieren-anime.gif" alt="" class="rounded">
        </section>
        <section class="rounded container">
            <h1>Identification</h1>
            <?php
            echo "<p><b>Name</b> =====> $name</p>";
            echo "<p><b>Age</b> ======> $age</p>";
            echo "<p><b>Program</b> ==> $program</p>";
            ?>
            <a class="rounded continue-button" href="./pages/likes/index.php">
                |== CONTINUE ==>
            </a>
        </section>
        <section class="rounded image">
            <img src="./assets/img/frieren-bell.gif" alt="" class="rounded">
        </section>
    </main>
</body>
</html>