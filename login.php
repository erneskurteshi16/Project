<?php 
session_start(); 
require "config.php"; 

$message = ""; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - MovieZone</title> 
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header> 
    <h2>MovieZone</h2> 
    <nav> 
        <a href="index.php">Home</a> 
        <a href="register.php">Register</a> 
        <a href="login.php">Sign In</a> 
    </nav> 
</header> 
<div class="form-container"> 
    <h1>Sign In</h1> 
    <p>Kyçu në llogarinë tënde.</p> 
    <?php if (isset($_GET["registered"])): ?> 
        <p class="success"> Regjistrimi u krye me sukses! </p> 
        <?php endif; ?> 
        <?php if ($message !== ""): ?> 
            <p class="message"> <?= htmlspecialchars($message) ?> 
        </p> 
        <?php endif; ?> 
        <form method="POST"> 
            <label>Name</label> 
            <input type="name" name="name" required >
    <form method="POST"> 
        <label>Email</label> 
        <input type="email" name="email" required > 
        <label>Fjalëkalimi</label> 
        <input type="password" name="password" required > 
        <button type="submit">Sign In</button> 
    </form> 
    <p>Nuk ke llogari? <a href="register.php">Register</a></p> 
</div>
</body>
</html>

