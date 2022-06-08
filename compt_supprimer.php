<?php
session_start();
include("connexionBDD.php");
 $id1=$_GET["id"];
 echo $id1;


 //----------
 $ins=$pdo->prepare (" DELETE FROM triathlon WHERE NumTriathlon= $id1");
 // VALUES ($NumeroLicence,'$nom','$prenom','$sexe','$rue','$ville',$codepostal,'$compladresse','$login','$pass')");
 //echo "requete : ".$ins;
 //$sel->query($ins);
 $ins->execute();
 ////-------

 echo '<script style = "color:red">alert("la compétition a été supprimer ")</script>';

?>