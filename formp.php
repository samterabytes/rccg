<?php 
session_start();
require_once("connect.php");

    $names = $_POST['names']; 
    $email = $_POST['email']; 
    $phone = $_POST['phone']; 
    $message = $_POST['message']; 
        $query = mysql_query("INSERT INTO users (names, email, phone, message)
        VALUES ('$names', '$email', '$phone', '$message')") or die(mysql_error());
        $_SESSION['msg'] = "Succesfully Added!";
        header("Location:contact.php");
?>



       