<?php
    session_start();
    require "config.php";

    $sql="SELECT * FROM movies";
    $stmt=$pdo->query($sql);
    $movies=$stmt->fetchAll();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Zone</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

      <header>
        <h2>Movie Zone</h2>

        <nav>
            <a href="index.php">Home</a>
            <a href="register.php">Register</a>

            <?php if (isset($_SESSION["user_id"])): ?>
                <a href="logout.php">Sign Out</a>
            <?php else: ?>
                <a href="login.php">Sign In</a>
            <?php endif; ?>
        </nav>
      </header>

<section class="hero">
    <h1>Welcome to Movie Zone</h1>
    <p>Find movies</p>
</section>

<section class="movies">
    <h2>Movies ours</h2>

    <div class="movie-container">
        <?php foreach($movies as $movie){ ?>

            <div class="movie-card"></div>

            <img
            src="<?= htmlspecialchars($movie['poster_url']) ?>"
            alt="<?= htmlspecialchars($movie['title']) ?>"
            >

            <h3>
                <?= htmlspecialchars($movie['title']) ?>
            </h3>
            <p>
                <?= htmlspecialchars($movie['genre']) ?>
            </p>

            <p>
                Viti: <?=  (int)$movie['release_year'] ?>
            </p>

            <p>
                <?= htmlspecialchars($movie['description']) ?>
            </p>

            <?php } ?>
    </div>
</section>

<footer>
    <p>2026 Movie Zone | Projekti</p>
</footer>

</body>
</html>