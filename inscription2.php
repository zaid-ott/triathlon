<?php
    //include("connexionBDD.php");
        session_start();
        $NumeroLicence=hexdec(uniqid()); //genere un id numerique unique
        $NumeroLicence=round($NumeroLicence/1000000); 
         //recuperation des donnees du formulaire
         $nom=$_POST["nom"];
         $prenom=$_POST["prenom"];
         $sexe=$_POST["sexe"];
         $rue=$_POST["rue_client"];
         $ville=$_POST["ville_client"];
         $codepostal=$_POST["cp_client"];
         $compladresse=$_POST["cad_client"];
         //$ComplementAdresseTriathletebis=$ComplementAdresseTriathlete? "":"";
         //$tel_client=$data['tel_client'];
         $login=$_POST["login"];
         
         $pass=$_POST["pass"];
         $c_pass=$_POST["confirm_pass"];
         $erreur="";
         $valider=$_POST["valider"];
         
         if(isset($valider)){
           
            if(empty($nom)){
                $erreur="nom laissé vide !";
                echo $erreur;
                header("refresh:2; url=inscription1.php");
             }
             else if(empty($login))
             {
                echo "email vide ! <br> ";
                header("refresh:2; url=inscription1.php");
             }
             else if ($pass!=$c_pass){
                 echo "les champs de mot de passe ne correspondent pas";
                 header("refresh:2; url=inscription1.php");
             }
            else{ 
                include("connexionBDD.php");
                $sel=$pdo->prepare ("SELECT NumeroLicence FROM triathlete WHERE EmailTriathlete=?  limit 1");
                $sel->execute (array($login));
            
                $tab=$sel->fetchAll();
            
            if (count($tab)>0){
                $erreur="login existe deja ! ";
                echo $erreur;
                }
                else {
                    $ins=$pdo->prepare ("INSERT INTO triathlete (NumeroLicence, NomTriathlete, PrenomTriathlete, SexeTriathlete, RueTriathlete, VilleTriathlete, CodePostalTriathlete, ComplementAdresseTriathlete, EmailTriathlete, MdpTriathlete) 
                    VALUES (?,?,?,?,?,?,?,?,?,?)");
                    // VALUES ($NumeroLicence,'$nom','$prenom','$sexe','$rue','$ville',$codepostal,'$compladresse','$login','$pass')");
                    //echo "requete : ".$ins;
                    //$sel->query($ins);
                    $passH=password_hash($pass, PASSWORD_DEFAULT);
                    echo $passH;
                    $ins->execute (array($NumeroLicence,$nom, $prenom,$sexe,$rue,$ville,$codepostal,$compladresse,$login,$passH));//md5($pass)//crypt($pass)
                    echo "votre inscription a bien été prise en compte <br></br>";
                    header("refresh:2; url=connexion1.php");  
            }
        }
    }       
?>