<?php
session_start();
include("connexionBDD.php");
 $id1=$_GET["id"];
 echo $id1;


 //----------
 $ins=$pdo->prepare (" DELETE NumeroDossard FROM inscription INNER JOIN triathlete where WHERE NumeroDossard= $id1");
 // VALUES ($NumeroLicence,'$nom','$prenom','$sexe','$rue','$ville',$codepostal,'$compladresse','$login','$pass')");
 //echo "requete : ".$ins;
 //$sel->query($ins);
 $ins->execute();
 ////-------

 echo '<script>alert("la compétition a été supprimer ")</script>';

 header("refresh:2; url=CompteTriathlete.php");
?>