


    
 <?php
    include("header.php");
 ?>

    <body>
        <div class="container">
            <h1>Connexion </h1>
                <form method="post" action="connexion2.php">
                    <input type="text" name="login" placeholder="email"  />  <br> <br>
                    <input type="password" name="pass" placeholder="mot de passe"  />  <br>
                    <input type="submit" name="valider" value="connexion" id="bouton" class="form-submit"/>
                    <div class="err"> <?php if(isset($erreur)){ echo $erreur;} ?> </div> 
                </form>
            </div>
            <h2> vous n'avez pas de compte ?<br>
               <a href="inscription1.php" > inscrivez-vous  <i class="fas fa-external-link-alt"></i></a>
               <span class="material-icons-outlined">
                
                </span>
              <p> <i class="fab fa-arrow-up-right-from-square" aria-hidden="true"></i></p>
             
            </h2>
        </div> 
    </body>
    <br>
    <div class="space">
        <br><br>
    </div>
    <div>
        <footer>
            <p><i class="fa fa-copyright" aria-hidden="true"> contactez-nous au 05 90 32 45 61</i></p>
            <div class="social-media">
                <p> <i class="fab fa-facebook-f" aria-hidden="true"></i></p>
                <p> <i class="fab fa-twitter" aria-hidden="true"></i></p>
                <p> <i class="fab fa-instagram" aria-hidden="true"></i></p>
                <p> <i class="fab fa-linkedin" aria-hidden="true"></i></p>
            </div>
        </footer>
    </div>
<!--
    
    -->
    
</html>