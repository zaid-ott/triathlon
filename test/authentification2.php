<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- <link rel="stylesheet" href="css/inscription.css">
        <link rel="stylesheet" href="css/corps_page.css">
        <link rel="stylesheet" href="css/co.css">-->
        
    </head>
    <body>

        <?php 
        include("header_connect.php");
            //connexion base de donnees
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=cas_triathlon;charset=utf8', 'root', ''); //dbname=nomdetabase, root = nom d'utilisateur et ' ' correspond au mdp (vide par défaut sur xampp et root sur mamp)
            }
            catch (Exception $e)
            {
                die('Erreur : ' . $e->getMessage());
            }

            //recuperation des donnees du formulaire d'inscription
            $data=$_POST;

            $NumeroLicence=hexdec(uniqid()); //genere un id numerique unique
            $NumeroLicence=round($NumeroLicence/1000000); //permet de reduire taille id + fonction round pour ne pas avoir de decimal


            //recuperation des donnees du formulaire
            $NomTriathlete=$data['lastname'];
            $PrenomTriathlete=$data['firstname'];
            $SexeTriathlete=$data['sexe'];
            $RueTriathlete=$data['rue_client'];
            $VilleTriathlete=$data['ville_client'];
            $CodePostalTriathlete=$data['cp_client'];
            $ComplementAdresseTriathlete=$data['cad_client'];
            $ComplementAdresseTriathletebis=$ComplementAdresseTriathlete? "":"";
            //$tel_client=$data['tel_client'];
            $EmailTriathlete=$data['emaili'];
            $MdpTriathlete=$data['passwordi'];

            //INSERT new client
            $request="INSERT INTO triathlete (NumeroLicence, NomTriathlete, PrenomTriathlete, SexeTriathlete, RueTriathlete, VilleTriathlete, CodePostalTriathlete, ComplementAdresseTriathlete, EmailTriathlete, MdpTriathlete) 
            VALUES ($NumeroLicence,'$NomTriathlete','$PrenomTriathlete','$SexeTriathlete','$RueTriathlete','$VilleTriathlete',$CodePostalTriathlete,'$ComplementAdresseTriathlete','$EmailTriathlete','$MdpTriathlete')";
            $bdd->query($request);
            //echo $request;

            //redirection sur la page contact avec le $_GET 
            //header('Location: ../inscription.php?sucessinscri=1');
            
            include("CompteTriathlete.php"); 

        ?>
        
    </body>
</html>