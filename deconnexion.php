<?php        

session_start();
session_unset();
session_destroy();
            
echo" Vous êtes  déconnecté ! "; 
echo "<br>";
echo "<br>";
echo "redirection dans 2s.."; 
header("refresh:2; url=index.php");


?>   
<footer>
        <p><i class="fa fa-copyright" aria-hidden="true"> contactez-nous au 05 90 32 45 61</i></p>
        <div class="social-media">
            <p> <i class="fab fa-facebook-f" aria-hidden="true"></i></p>
            <p> <i class="fab fa-twitter" aria-hidden="true"></i></p>
            <p> <i class="fab fa-instagram" aria-hidden="true"></i></p>
            <p> <i class="fab fa-linkedin" aria-hidden="true"></i></p>
        </div>
    </footer>