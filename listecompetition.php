


    
    <?php  
   include("header.html");
    //entete avec le formulaire de connexion + connexion a la bdd

    //session_start();
   // include("connexionBDD.php");
    if(isset($_SESSION["autoriser"]) && $_SESSION["admin"]==FALSE)
    {

        //DEBUT AFFICHAGE DES INFORMATIONS CLIENT
        //email
        echo "<h1>LISTES DES COMPETITIONS </h1>";
        echo "<div class='container'>";
        
        echo " <table border ='1'>
        
        <td>Code Triathlon</td>
        <td>&emsp;&emsp;Nom Triathlon &emsp;&emsp;</td>
        <td>&emsp;&emsp;Lieu Triathlon&emsp;&emsp;&emsp;</td>
        <td>&emsp;&emsp;date Triathlon &emsp;</td>
        <td>&emsp;code type &ensp;&emsp;</td>
         ";


        
        
        // echo "</fieldset><fieldset id='adresse'><legend></legend>";
        $req = 'SELECT * from triathlon EXCEPT (SELECT triathlon.NumTriathlon, triathlon.NomTriathlon, triathlon.LieuTriathlon, triathlon.DateTriathlon, triathlon.CodeTypeTriathlon FROM triathlon INNER join inscription oN triathlon.NumTriathlon = inscription.NumTriathlon)';
        $reponse = $pdo->query($req);
        if ($reponse!=null){
            $address = $reponse->fetchAll();
            $dim = sizeof($address);

            
            //test : 
            do {
                //echo "<table border='1'>";
                for ($i = 0; $i <$dim; $i++) {
                    
                    
                    echo "<tr>";
                    for ($j = 0; $j <5; $j++){
                        echo "<td>&emsp;&emsp;";
                        echo $address[$i][$j];
                        echo "&emsp;&emsp;</td>\n";
                    }  
                // echo "<td><a href='insert_inscri.php'><button >s'inscrire</button> </a></td>";
                    echo "<td><a href='insert_inscri.php?idinscri=".$address[$i][0]."'><button name='inscr'>S'inscrire</button> </a></td>";
                }
                echo "<br></br></tr>";
            } while ($address = $reponse->fetch());
            echo "</table>";
            //FIN AFFICHAGE liste
            //recuperation de l'id du client depuis le header_co
            // $id_client = $_SESSION['id_session'//];
            echo "</div>";

            if(isset($errinscri)){
                echo "<br> <br><div style='color:red'>" .$errinscri;
                echo "<a href ='connexion1.html' > s'identifier <i class='fas fa-external-link-alt'></i></i></a></div>";
            }
        }
            else {
                echo "vous n'avez plus de compte";
            }

    }
    else if(isset($_SESSION["autoriser"]) && $_SESSION["admin"]==TRUE)
    {

       // echo("veuillez vous connectez .. ");
        //header("refresh:2; url=connexion.html");
         //DEBUT AFFICHAGE DES INFORMATIONS CLIENT
        //email
        
        echo "<h1>LISTES DES COMPETITIONS </h1>";
        
       
        echo " <span class='b'><table border ='1'>
        
        <td>Code Triathlon</td>
        <td>&emsp;&emsp;Nom Triathlon &emsp;&emsp;</td>
        <td>&emsp;&emsp;Lieu Triathlon&emsp;&emsp;&emsp;</td>
        <td>&emsp;&emsp;date Triathlon &emsp;</td>
        <td>&emsp;code type &ensp;&emsp;</td>
        ";
       
       // echo"</table> ";"</div>";

        //echo "<div class='liste'>";
        //echo "</fieldset><fieldset id='adresse'><legend></legend>";
        $req = 'SELECT * FROM triathlon';
        $reponse = $pdo->query($req);
        $address = $reponse->fetchAll();
        $dim = sizeof($address);
       // echo sizeof($address);
        //test : 
        do {
            //echo "<table border='1'>";
            $supprimer_pos=0;
            for ($i = 0; $i <$dim; $i++) {
                
               // echo "<br></br>";
                echo "<tr>";
                for ($j = 0; $j <5; $j++){
                    echo "<td>";
                    echo $address[$i][$j];
                    echo "</td>\n";
    
                }  
                
                //echo "<td><form action='compt_modifier.php' method='POST'><input type='submit' value='modifier' ></form></td>";
                echo "<td><a href='compt_modifier.php?id=".$address[$i][0]."'><button name='mod'>modifier</button> </a></td>";
                echo "<td><a href='compt_supprimer.php?id=".$address[$i][0]."'><button name='sup'>Supprimer</button> </a></td>";
            
                //--- valeur souhaité "
                //echo "<td>".$address[$i][0]."</td>";
            }
            echo "<br></br></tr>";
        }while ($address = $reponse->fetch());
        echo "</table>";
        //FIN AFFICHAGE liste
        //recuperation de l'id du client depuis le header_co
        // $id_client = $_SESSION['id_session'//];
        echo "</span>";

        echo "<br>";
        echo "<a href='compt_ajouter.html'><button name='ajout'>Ajouter</button></a>";
        
    }else{
        echo "<h1>LISTES DES COMPETITIONS </h1>";
        echo "<div class='inscription1'>";
        
        echo " <table border ='1'>
        
        <td>Code Triathlon</td>
        <td>&emsp;&emsp;Nom Triathlon &emsp;&emsp;</td>
        <td>&emsp;&emsp;Lieu Triathlon&emsp;&emsp;&emsp;</td>
        <td>&emsp;&emsp;date Triathlon &emsp;</td>
        <td>&emsp;code type &ensp;&emsp;</td>
         ";


        
        
        // echo "</fieldset><fieldset id='adresse'><legend></legend>";
        $req = 'SELECT * FROM triathlon';
        $reponse = $pdo->query($req);
        $address = $reponse->fetchAll();
        $dim = sizeof($address);

        
        //test : 
        do {
            //echo "<table border='1'>";
            for ($i = 0; $i <$dim; $i++) {
                
                
                echo "<tr>";
                for ($j = 0; $j <5; $j++){
                    echo "<td>&emsp;&emsp;";
                    echo $address[$i][$j];
                    echo "&emsp;&emsp;</td>\n";
                }  
               // echo "<td><a href='insert_inscri.php'><button >s'inscrire</button> </a></td>";
                echo "<td><a href='insert_inscri.php?idinscri=".$address[$i][0]."'><button name='inscr'>S'inscrire</button> </a></td>";
            }
            echo "<br></br></tr>";
        } while ($address = $reponse->fetch());
        echo "</table>";
        //FIN AFFICHAGE liste
        //recuperation de l'id du client depuis le header_co
        // $id_client = $_SESSION['id_session'//];
        echo "</div>";

        if(isset($errinscri)){
            echo '<script style = "color:red">alert("veuillez vous authentifier pour s "inscrire au triathlon ! ")</script>';
            echo "<br> <br><div style='color:red'>" .$errinscri;
            echo "<a href ='connexion1.html' > s'identifier <i class='fas fa-external-link-alt'></i></i></a></div>";
        }
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
</body>

</html>