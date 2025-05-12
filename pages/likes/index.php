<?php
$likes = [
    "Games" => ["Rainbow Six Siege", "Monster Hunter Rise: Sunbreak and World: Iceborne", "Honkai: Star Rail", "Zenless Zone Zero", "Valorant", "League of Legends", "GTFO"],
    "Anime/Manga" => ["Frieren: Beyond Journey's End", "Kyoukai no Kanata", "Haikyu!!", "Shigatsu wa Kimi no Uso", "Koe no Katachi", "The Fragrant Flower Blooms with Dignity", "Kuroko no Basuke", "Jujutsu Kaisen"],
    "YouTube" => ["Markiplier", "SMii7Y", "Hololive", "OfflineTV"]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Likes</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <section class="image">
            <img src="./assets/img/hololive-bancho.gif" alt="" class="rounded">
        </section>
        <section class="rounded container">
            <h1>My Likes</h1>
            <ul id="likes-list">
            <?php
            foreach ($likes as $like => $names) {
                echo "<h3>$like</h3><ul>";
                foreach ($names as $name) {
                    echo "<li>$name</li>";
                }
                echo "</ul>";
            }
            ?>
            </ul>
            <a class="rounded return-button" href="../../index.php">
                <== RETURN ==|
            </a>
        </section>
        <section class="image">
            <img src="./assets/img/ina-squishy-cheeks-2.gif" alt="" class="rounded">
        </section>
    </main>
</body>
</html>