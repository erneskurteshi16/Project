<?php 
session_start(); 
require "config.php"; 

$message = ""; 

if 
($_SERVER["REQUEST_METHOD"] === "POST") 
{ $email = trim($_POST["email"] ?? ""); 
$password = $_POST["password"] ?? ""; 
$stmt = $pdo->prepare( "SELECT * FROM users WHERE email = ?" ); 
$stmt->execute([$email]); $user = $stmt->fetch(); 
if ( 
    $user && password_verify($password, $user["password"]) ) { session_regenerate_id(true); 
    $_SESSION["user_id"] = $user["id"]; 
    $_SESSION["user_name"] = $user["name"]; 
header("Location: index.php"); exit; 
} else { 
    $message = "Emaili ose fjalëkalimi është gabim!"; } } 
    ?>