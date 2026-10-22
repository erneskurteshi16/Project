<?php 
session_start(); 
require "config.php"; 

$message = ""; 

if ($_SERVER["REQUEST_METHOD"] === "POST") {

     $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? ""); 
    $password = $_POST["password"] ?? ""; 

    if (
    $name !== "" && 
    filter_var($email, FILTER_VALIDATE_EMAIL) && 
    strlen($password) >= 8 
    ) {

       $check = $pdo->prepare(
        "SELECT id FROM users WHERE email = ?" 
       );

        $check->execute([$email]);

           if ($check->fetch()) { 
           $message = "Ky email ekziston tashmë!";

        } else { 
             $hashedPassword = password_hash(
             $password,
             PASSWORD_DEFAULT 
             ); 

              $sql = "INSERT INTO users 
              (name, email, password) 
              VALUES (?, ?, ?)"; 

              $stmt = $pdo->prepare($sql); 

              $stmt->execute([ 
               $name,
               $email,
               $hashedPassword
            ]);
               header("Location: login.php?registered=1");
               exit;
        }
    }else{
        $message="Ploteso te dhenat sakte.Fjalekalimi duhet te kete se paku 8 karaktere.";

    }
}
?>