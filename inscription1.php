
<!doctype HTML>
<html> 

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="inscription.css">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
            integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
   <?php
   include("header.php");
   ?>
   
    <body>
       <script> src="inscription.js" </script>
       <div class= "container">
        <form name = "fo" action="inscription2.php" method="POST">
            <!--
            info client : nom, prenom, date naissance, rue, ville, CP, complement d'adresse, telephone, mail, mdp
            -->
                <h2 class="titre">Faites votre inscription ! </h2>

                <!--premier fieldset avec les identifiants-->
                <h3></h3>
                <fieldset id="identifiant">
                    <legend>Identifiants</legend>

                    <input type="email" name="login" placeholder="E-mail" required/>
                    <input type="password"  name="pass" minlength="8" placeholder="Mot de passe"  required>
                    <input type="password" name="confirm_pass" placeholder="confirm mot de passe" required>
                    <span id="msg_err"> </span>
                    
                </fieldset>

                <!--second fieldset avec les infos generales-->
                <fieldset id="nom">
                    <legend>Informations générales</legend>

                    <input type="texte" name="nom" placeholder="Nom" required/>
                    <input type="texte" name="prenom" placeholder="Prénom" required/>
                    <br/><br/>
                    <label for="sexe">sexe : </label>
                    <!---<input type="label" name="sexe"/> --><div>
  <input type="radio" id="m" name="sexe" value="0"
         checked>
  <label for="m">masculin</label>
</div>

<div>
  <input type="radio" id="fem" name="sexe" value="1">
  <label for="fem">féminin</label>
</div>

<div>
  <input type="radio" id="lgbt" name="sexe" value="2">
  <label for="lgbt">LGBTQ+</label>
</div>
                </fieldset>

                <!--troisieme fieldset avec l'adresse et le telephone -->
                <fieldset id="adresse">
                    <legend>Coordonnées</legend>
 
                    <input type="texte" name="rue_client" placeholder="N° et rue"/>
                    <input type="texte" name="cad_client" placeholder="Complément d'adresse"/>  
                    <input type="texte" name="cp_client" placeholder="Code postal"/> 
                    <input type="texte" name="ville_client" placeholder="Ville"/> 
                    <!--<input type="tel" name="tel_client" placeholder="Téléphone"/>-->
                </fieldset> 

                <div class="form-group">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
                    </div>
                <div id="button1">            
                <!-- a rediriger vers l'accueil en mettant inscription 2 dans accueil -->
                <input type="submit" name="valider" value="envoyer" id="bouton" class="form-submit"/>
                <input type="reset" id="id_reset" value="Effacer tous les champs" class="form-submit"/>
                
                </div>
            
        </form>

    </div>
    <div class="space">
        <br><br>
    </div>
    <br>
    <div>
        <footer>
            <p><i class="fa fa-copyright" aria-hidden="true"> contactez-nous au 05 XX XX XX XX</i></p>
            <div class="social-media">
                <p> <i class="fab fa-facebook-f" aria-hidden="true"></i></p>
                <p> <i class="fab fa-twitter" aria-hidden="true"></i></p>
                <p> <i class="fab fa-instagram" aria-hidden="true"></i></p>
                <p> <i class="fab fa-linkedin" aria-hidden="true"></i></p>
            </div>
        </footer>
    </div>
    </body>
  
</html>

