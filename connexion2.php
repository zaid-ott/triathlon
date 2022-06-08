<?php

@$login=$_POST["login"];
//@$pass=md5($_POST["pass"]);//@$pass=md5($_POST["pass"]);
@$pass=$_POST["pass"];
@$valider=$_POST["valider"];

//echo"isset null";
if (isset($valider)){
    include("connexionBDD.php");
    $sel=$pdo->prepare("SELECT*FROM triathlete WHERE EmailTriathlete=? limit 1");
    $sel->execute(array($login));
    $tab=$sel->fetchAll();
   // echo"fetch \n";
    if (count($tab)>0) {
        $passwordHash= $tab[0]["MdpTriathlete"];
        if (password_verify($pass, $passwordHash)){


        session_start();
        $_SESSION["ND"]=$tab[0]["NumerDossard"]
        $_SESSION["prenom"]=ucfirst(strtolower($tab[0]["PrenomTriathlete"]));
        $_SESSION["prenomnom"]=ucfirst(strtolower($tab[0]["PrenomTriathlete"]))."&nbsp;".strtoupper($tab[0]["NomTriathlete"]);
        $_SESSION["id"]=$tab[0]["NumeroLicence"];//variable session nommé id qui contient le n licence
        $_SESSION["admin"]=$tab[0]["admin"];
        $_SESSION["login"]=$tab[0]["EmailTriathlete"];
        $_SESSION["pass"]=$tab[0]["MdpTriathlete"];
        $_SESSION["autoriser"]="oui";
        echo $_SESSION["admin"];
        //echo"\nredirection header session";
        echo"session\n";
        header("location: session.php" );

  
         } 
        }else {  
            $erreur="mauvais login ou mot de passe ! ";
            include("connexion1.php"); 
}
}
?>
