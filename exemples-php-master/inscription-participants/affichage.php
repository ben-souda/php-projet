<?php
 // Traitement

 // Initialisation du session
 session_start();

 // Initialisation du tableau des participants



 // Trouver ou créer le tableau dans Session
 if( isset( $_SESSION['Username'] ) ) {
    $Username =  $_SESSION['Username'] ;
 }else {
    $_SESSION['Username'] =  $Username;
 }

 // Ajouter le nom du nom dans le tableau
 $Username = $_POST["Username"] ;
 

 // Enregistrer le tableau dans la session
$_SESSION['Username'] =  $Username;

// Trouver ou créer le tableau dans Session
if( isset( $_SESSION['email'] ) ) {
    $email =  $_SESSION['email'] ;
 }else {
    $_SESSION['email'] =  $email;
 }

 // Ajouter le nom du nom dans le tableau
 $email = $_POST["email"] ;
 

 // Enregistrer le tableau dans la session
$_SESSION['email'] =  $email;

// Trouver ou créer le tableau dans Session
if( isset( $_SESSION['Nemero'] ) ) {
    $Nemero =  $_SESSION['Nemero'] ;
 }else {
    $_SESSION['Nemero'] =  $Nemero;
 }

 // Ajouter le nom du nom dans le tableau
 $Nemero = $_POST["Nemero"] ;
 

 // Enregistrer le tableau dans la session
$_SESSION['Nemero'] =  $Nemero;

// Trouver ou créer le tableau dans Session
if( isset( $_SESSION['password'] ) ) {
    $password =  $_SESSION['password'] ;
 }else {
    $_SESSION['password'] =  $password;
 }

 // Ajouter le nom du nom dans le tableau
 $password = $_POST["password"] ;
 

 // Enregistrer le tableau dans la session
$_SESSION['password'] =  $password;



?>

<!-- Affichage -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styless.css">
    <title>Document</title>
</head>
<body>
<h1>Liste des participants</h1>
<center>
<table class="styled-table">
    <thead>
        <tr>
    <th>Username</th>
    <th>email</th>
    <th>Nemero</th>
    <th>password</th>
        </tr>
    </thead>
    <tbody>
        <td>
                <?php
     
     echo "<li>".$Username ."</li>";
 
 ?>
            <td>
    <?php
     
     echo "<li>".$email ."</li>";
     ?>
 </td>
        </td>
        <td>
        <?php
     
     echo "<li>".$Nemero ."</li>";
 
 ?>
        </td>
        <td>
        <?php
     
     echo "<li>".$password ."</li>";
 
 ?>
        </td>
    </tbody>
</table>
</center>
<style>


    

    
</style>
</body>
</html>