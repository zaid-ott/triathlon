<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

</head>

<!--
<header>
    
        <nav>
            <div class="logo">
                <a href="#"> <b>triathlon</b> </a>
            </div>
            <div class="onglets">
                <a href="index.php">acceuil</a>
                <a href="authentification_triathlon.php">inscription</a>
                <a href="connexion_triathlon.php">connexion</a>
                <a href="mailto:ottmanizaid1996@gmail.com">@Contact us </a>
                <a href="deconnexion.php">log OUT </a>
            </div>
        </nav>
        <div class="principal">
            <h1><b> Triathlon Grand Toulouse</b> </h1>
            <h2><i class="fas fa-swimmer"></i>
                <i class="fas fa-running"></i>
                <i class="fas fa-biking"></i>
            </h2>
        </div>

    </header>

    -->

<body>


    <?php
    //demarrage de la session
    session_start();

    /*creation des variables cmd et deco qui se trouvent plus bas dans le "header"
    pour la deconnexion de l'utilisateur*/
    if (isset($_GET['cmd'])) {
        if ($_GET['cmd'] == 'deco') {
            $_SESSION = array();
            session_destroy();
        }
    }

    //connexion a la base de donnees
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=cas_triathlon;charset=utf8', 'root', '');
        //dbname=nomdetabase, root = nom d'utilisateur et ' ' correspond au mdp (vide par défaut sur xampp et root sur mamp)
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    //variable de connexion fixee a fausse
    $connected = false;

    //si la personne est connectee, la variable devient vraie
    if (isset($_SESSION['id_session'])) {
        $connected = true;
    }

    if (!$connected) //si pas connecte
    {

        //recuperation des donnees en post avec $data 
        $data = $_POST;

        //pour se connecter, verification du mail et mdp dans la bdd
        if (isset($data['mail'])) {

            $pseudo = $data['mail'];
            $mdp = $data['password'];
            $pseudo = addslashes($pseudo);
            $mdp = addslashes($mdp);

            $req = "SELECT * FROM triathlete WHERE EmailTriathlete = '$pseudo' AND MdpTriathlete = '$mdp'";
            $resultat = $bdd->query($req);

            //permet de récupérer les informations de l'utilisateur qui se connecte
            $ligne = $resultat->fetch();

            //si resultat faux, retourne une phrase
            if (!$ligne) {
                echo "<h1 id='fail'>Mauvais identifiant ou mot de passe !</h1>";
            } else //si la verification a fonctionnee, alors connexion
            {
                $_SESSION['id_session'] = $ligne['NumeroLicence'];
                //echo 'Connexion réussie';
                $connected = true;
                $_SESSION['PrenomTriathlete'] = $ligne['PrenomTriathlete'];
            }
        }
    }

    //variable pour le header / inscription --> nom client et le lien inscription --> compte client / lorsque pas connecte
    $label = "Inscription";
    $link = "<a href='inscription.html'>";

    //si connecte, changement de la valeur des variables
    if ($connected) {
        $label = $_SESSION['PrenomTriathlete'];
        $link = "<a href='CompteTriathlete.php'>";
    }

    //entete de la page


    if (!$connected) //si pas connecte envoi du formulaire
    {
        //include("connexion_triathlon.php");
        /*
        echo
        "<form class='form_head' method='POST'>
            <!--
            info client : nom, prenom, sexe, rue, ville, CP, complement d'adresse, telephone, mail, mdp
            -->
                <div id='inscription'>
                    <h1 class='titre'>CONNEXION</h1>
                    <div id='donnees'>
                        <input type='email' name='mail' placeholder='E-mail'/>
                        <input type='password' name='password' minlength='6' placeholder='Mot de passe'>
                        <br/>
                        <input type='submit' value='CONNEXION' id='bouton'/> 
                    </div>
                </div>
            </form>";*/
    }

    ?>


</body>

</html>