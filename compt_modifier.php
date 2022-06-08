//update famille set nom='$nm',prenom='$pnm',statut='$st',datenaiss='$dt' where id='$id'"
<?php
session_start();
include("connexionBDD.php");
 $id1=$_GET["id"];
 echo $id1;


 //----------
 $ins=$pdo->prepare ("UPDATE triathlon SET LieuTriathlon='Casablanca' WHERE NumTriathlon=9");
 // VALUES ($NumeroLicence,'$nom','$prenom','$sexe','$rue','$ville',$codepostal,'$compladresse','$login','$pass')");
 //echo "requete : ".$ins;
 //$sel->query($ins);
 $ins->execute();
 ?>

 