
        <?php 
            include("header.php");
            //entete avec le formulaire de connexion + connexion a la bdd
           
            $id=$_SESSION["id"];
            
            //echo $id;
           
            
           if ($_SESSION["autoriser"]=="oui") //si connecte
            {
            
                
                //-----------tableau competition----//
                //DEBUT AFFICHAGE DES INFORMATIONS CLIENT
                //email
                echo "<br><div class='container'><span class='b'> <fieldset><legend> <strong>VOS INFORMATIONS </strong></legend>
                &emsp;&emsp;<strong>Identifiant : </strong>";
                $reponse=$pdo->query('SELECT EmailTriathlete FROM triathlete WHERE NumeroLicence="' . $id . '"');
                $mail = $reponse->fetch(); 
                echo $mail['EmailTriathlete'];

                //mot de passe
                /*
                echo "<br/>Mot de passe : ";
                $reponse=$pdo->query('SELECT MdpTriathlete FROM triathlete WHERE NumeroLicence="' . $id . '"');
                $mdp = $reponse->fetch(); 
                echo $mdp['MdpTriathlete'];
                */
                //nom
                echo "&emsp;||&emsp;<strong>Nom : </strong> ";
                $reponse=$pdo->query('SELECT NomTriathlete FROM triathlete WHERE NumeroLicence="' . $id . '"');
                $nom = $reponse->fetch(); 
                echo $nom['NomTriathlete']; 



                    
                //prenom
                echo "&emsp;||&emsp;<strong>Prenom : </strong>";
                $reponse=$pdo->query('SELECT PrenomTriathlete FROM triathlete WHERE NumeroLicence="' . $id . '"');
                $prenom = $reponse->fetch(); 
                echo $prenom['PrenomTriathlete']; 


                 //sexe
                 echo "&emsp;&emsp;<strong>sexe : </strong> : ";
                 $reponse=$pdo->query('SELECT SexeTriathlete FROM triathlete WHERE NumeroLicence="' . $id . '"');
                 $sexe = $reponse->fetch(); 
                 if($sexe['SexeTriathlete']==0){
                     echo "masculin";
                 }else if($sexe['SexeTriathlete']==1){
                     echo"féminin";
                 }else if($sexe['SexeTriathlete']==2){
                     echo "LGBTQ+";
                 }



                //date de naissance
               /* echo "<br/>Date de naissance : ";
                $reponse=$bdd->query('SELECT anniv_client FROM triathlete');
                $anniv = $reponse->fetch(); 
                echo $anniv['anniv_client']; 
                */

                //adresse complete
                echo "&emsp;&emsp;<strong>Coordonées : </strong> :";
                $req="SELECT RueTriathlete, ComplementAdresseTriathlete, CodePostalTriathlete, VilleTriathlete FROM triathlete WHERE NumeroLicence=$id";
                $reponse=$pdo->query($req);
                $address = $reponse->fetch(); 
                echo $address['ComplementAdresseTriathlete']."&emsp;".$address['RueTriathlete']."&emsp; ".$address['CodePostalTriathlete']." &emsp; ".$address['VilleTriathlete']; 
                    
                //telephone
               /* echo "<br/>Téléphone : "; 
                $reponse=$bdd->query('SELECT tel_client FROM triathlete');
                $tel = $reponse->fetch(); 
                echo "0".$tel['tel_client']; 
                */
                echo "</fieldset></span>";
                //FIN AFFICHAGE INFORMATIONS CLIENT
                //------------///

            echo "<span class='b' ><fieldset ><br><legend >&emsp;<strong>Vos Compétitions :&emsp;</strong></legend>";
            echo " <table border ='1'>
            <td>Numero de dossard</td>
            <td>&emsp;&emsp;date  &emsp;&emsp;</td>
            <td>&emsp;&emsp;durée natation&emsp;&emsp;&emsp;</td>
            <td>&emsp;&emsp;durée course cylce &emsp;</td>
            <td>&emsp;durée course à pied &ensp;&emsp;</td>
            <td>&emsp;classement catégorie &ensp;&emsp;</td>
            <td>&emsp;numero triathlon &ensp;&emsp;</td>
            <td>&emsp;numero licence &ensp;&emsp;</td> ";
           
            // echo "</fieldset><fieldset id='adresse'><legend></legend>";
            $req = "SELECT * FROM inscription inner join triathlete on triathlete.NumeroLicence=$id ";
            $reponse = $pdo->query($req);
            $address = $reponse->fetchAll();
            $dim = sizeof($address);
            //test : 
            do {
               
                for ($i = 0; $i <$dim; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j <8; $j++){
                        echo "<td>&emsp;";
                        echo $address[$i][$j];
                        echo "</td>\n";
                    }  
                   // echo "<td><a href='insert_inscri.php'><button >s'inscrire</button> </a></td>";
                   
                    echo "<td><a href='compt_supprimer.php?id=".$address[$i][0]."'><button name='sup'>Annuler</button> </a></td>";
                }
                echo "</tr>";
            } while ($address = $reponse->fetch());
            echo "</table>";

        echo "</fieldset></span></div>";
                
                
                //recuperation de l'id du client depuis le header_co
                //$id=$_SESSION["id"];
            //echo $id;

           // echo "<span class='b'>       &emsp;&emsp;     </span>";


            }

        ?>
        
        <div class="space">
        <br><br>
    </div>
    <footer>
        <p><i class="fa fa-copyright" aria-hidden="true"> contactez-nous au 05 90 32 45 61</i></p>
        <div class="social-media">
            <p> <i class="fab fa-facebook-f" aria-hidden="true"></i></p>
            <p> <i class="fab fa-twitter" aria-hidden="true"></i></p>
            <p> <i class="fab fa-instagram" aria-hidden="true"></i></p>
            <p> <i class="fab fa-linkedin" aria-hidden="true"></i></p>
        </div>
    </footer>
