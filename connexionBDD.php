<?php



try
    {
        $pdo = new PDO('mysql:host=localhost;dbname=cas_triathlon;charset=utf8', 'zaid', 'PhpMyAdmin_2022'); 
        //dbname=nomdetabase, root = nom d'utilisateur et ' ' correspond au mdp (vide par défaut sur xampp et root sur mamp)
       
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
 

    ?>