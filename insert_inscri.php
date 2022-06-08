
<?php


session_start();
include("connexionBDD.php");

if (isset($_SESSION["autoriser"])){

        if(false){
            
            echo '<script>alert("Ceci est un PopUp")</script>';
            header("refresh:2; url=listecompetition.php"); 

        }else{

        $email=$_SESSION["login"];
        $NumeroDossard=hexdec(uniqid()); //genere un id numerique unique
        $NumeroDossard=round($NumeroDossard/1000000); //1
        setlocale(LC_TIME, 'fra_fra');
        $DateCrea=strftime('%Y-%m-%d');//2
        //infos traithlon : //
        $TempsNatation=2;//3
        $TempsCourseCycliste=3;//4
        $TempsCoursePied=1;//5
        $ClassmentCategorie=99;//6
        $NumTriathlon=$_GET["idinscri"];//7
        $NumeroLicence=$_SESSION["id"];//8
        $ins=$pdo->prepare ("INSERT INTO inscription (NumeroDossard, DateInscription, TempsNatation, TempsCourseCycliste, TempsCoursePied, ClassementCategorie, NumTriathlon) 
        VALUES (?,?,?,?,?,?,?)");  
        $ins->execute (array($NumeroDossard,$DateCrea, $TempsNatation, $TempsCourseCycliste, $TempsCoursePied, $ClassmentCategorie, $NumTriathlon));//md5($pass)//crypt($pass)
        $ins=$pdo->prepare ("INSERT INTO triathlete (NumeroDossard) 
        VALUES (?,?,?,?,?,?,?)");  
        $ins->execute (array($NumeroDossard
        echo"votre inscriptiona été prise en compte, vous allez recevoir un mail recapitulatif";
        //---------test email---------\\

        $nom=$_SESSION["prenomnom"];
        $msg="votre inscription a été validée, 
        voici un recap de votre prochaine compétition : 
        Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.

        ------------------------
        Username: '.$nom.'
        numero de dossard : '.$NumeroDossard.'
        id de triathlon : '.$NumTriathlon.'
        durée natation'.$TempsNatation.'
        durée course cycle : '.$TempsCourseCycliste.'
        durée course à pied : '.$TempsCoursePied.'
        classement de catégorie : '.$ClassmentCategorie.'


        ------------------------

        Please click this link to activate your account:
        //http://www.yourwebsite.com/verify.php?email='.$email.'&hash=";


        mail('zaid.ottmani@outlook.fr','first email verification', $msg ,'From: no-reply@triathlon.fr');
            //---------fin ---------\\
        //--------------------------------------------
    // header("refresh:4; url=listecompetition.php"); 
    }

}else {
    $errinscri="veuillez vous authentifier pour s'inscrire au triathlon ! ";
    include("listecompetition.php");
}
