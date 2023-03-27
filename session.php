<?php
    session_start();
    if($_SESSION["autoriser"]!="oui"){
        header("refresh: 1 ;  url=connexion1.html");
   //header("location: connexion.html");
        exit(); 

    }
    else{
    
        echo"bonjour et bienvenue &emsp; ".
        $_SESSION["prenomnom"].
        "&emsp;dans votre session";
       header("refresh:1;url=CompteTriathlete.php");
       //echo $_SESSION["admin"];

    }
?>
