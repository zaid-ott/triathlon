<?php
session_start();
include("connexionBDD.php");

$i=hexdec(uniqid());
$numtriathlon=round($i/1E+12);
$nomtriathlon=$_POST["nom"];
$lieutriathlon=$_POST["lieu"];
$datetriathlon=$_POST["date"];
$codetriathlon=$_POST["select"];

$ins=$pdo->prepare ("INSERT INTO Triathlon(NumTriathlon, NomTriathlon, LieuTriathlon,DateTriathlon, CodeTypeTriathlon) Values (?,?,?,?,?)");
// VALUES ($NumeroLicence,'$nom','$prenom','$sexe','$rue','$ville',$codepostal,'$compladresse','$login','$pass')");
//echo "requete : ".$ins;
//$sel->query($ins);
$ins->execute(array($numtriathlon, $nomtriathlon, $lieutriathlon,$datetriathlon,$codetriathlon));
if(isset($ins)){
    echo "la compétition a été ajoutée avec succés ! ";
    //header();
}

?>

