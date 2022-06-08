<?php 
    //demarrage de la session
    session_start();

    /*creation des variables cmd et deco qui se trouvent plus bas dans le "header"
    pour la deconnexion de l'utilisateur*/
    if (isset($_GET['cmd']))
    {
        if ($_GET['cmd']=='deco')
        {
            $_SESSION = array();
            session_destroy();
        }
    }
    
    //connexion a la base de donnees
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=jurassicpan;charset=utf8', 'root', ''); 
        //dbname=nomdetabase, root = nom d'utilisateur et ' ' correspond au mdp (vide par défaut sur xampp et root sur mamp)
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
    
    //variable de connexion fixee a fausse
    $connected=false;
    
    //si la personne est connectee, la variable devient vraie
    if (isset($_SESSION['id_session']))
    {
        $connected=true;
    }

    if (!$connected) //si pas connecte
    {
    
        //recuperation des donnees en post avec $data 
        $data=$_POST;
        
        //pour se connecter, verification du mail et mdp dans la bdd
        if (isset($data['mail']))
        {
            
            $pseudo=$data['mail'];
            $mdp=$data['password']; 
            $pseudo=addslashes($pseudo);
            $mdp=addslashes($mdp);
            
            $req = "SELECT * FROM Client WHERE mail_client = '$pseudo' AND mdp_client = '$mdp'";
            $resultat=$bdd->query($req);
        
            //permet de récupérer les informations de l'utilisateur qui se connecte
            $ligne = $resultat->fetch();
            
            //si resultat faux, retourne une phrase
            if (!$ligne)
            {
                echo "<h1 id='fail'>Mauvais identifiant ou mot de passe !</h1>";
            }
            else //si la verification a fonctionnee, alors connexion
            {
                $_SESSION['id_session']=$ligne['id_client'];
                //echo 'Connexion réussie';
                $connected=true;
                $_SESSION['prenom_client']=$ligne['prenom_client'];
            }
        }
    }

    //variable pour le header / inscription --> nom client et le lien inscription --> compte client / lorsque pas connecte
    $label="Inscription";
    $link="<a href='inscription.html'>";

    //si connecte, changement de la valeur des variables
    if($connected)
    {
        $label=$_SESSION['prenom_client'];
        $link="<a href='compte_client.php'>";
    }

    echo //entete de la page
        "<header>
        
            <!--reseaux sociaux-->
            <span id='reseau'>
                <a href='https://www.facebook.com/'><img src='images/fb.png' class='reseau'/></a>
                <a href='https://www.instagram.com/'><img src='images/insta.png' class='reseau'/></a>
                <img src='images/snap.png' class='reseau'/>
            </span>
            
            <!--titre-->
            <span id='titre'>
                <img src='images/dino_reverse.png' width='150'/>
                <a href='page_de_garde.php'><h1 id='entete'>JURASSIC PAN</h1></a>
                <img src='images/dino.png' width='150'/>
            </span>

            <!--inscription et panier-->
            <span id='clickable'>".
                $link."<img src='images/msn.png' class='img_inscri'/>".$label."</a>
                <a href='?cmd=deco'><img src='images/croix.png' class='img_inscri'/>Déconnexion</a>
                <a href='panier.php' id='panier'><img src='images/caddie.png' class='img_inscri'/>Panier</a>
            </span>
        </header>";

    if (!$connected) //si pas connecte envoi du formulaire
    {
        echo 
            "<form class='form_head' method='POST'>
            <!--
            info client : nom, prenom, date naissance, rue, ville, CP, complement d'adresse, telephone, mail, mdp
            -->
                <div id='inscription'>
                    <h1 class='titre'>CONNEXION</h1>
                    <div id='donnees'>
                        <input type='email' name='mail' placeholder='E-mail'/>
                        <input type='password' name='password' minlength='8' placeholder='Mot de passe'>
                        <br/>
                        <input type='submit' value='CONNEXION' id='bouton'/> 
                    </div>
                </div>
            </form>" 
        ;

    }
    
?>


