<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="connexion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
@import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai+Looped:wght@100&family=Open+Sans+Condensed:wght@300&display=swap');
</style>

    <title>Document</title>

    
</head>
<header>
        
            <nav>
                <div class="logo">
                    <a href="#"> <b>triathlon</b> </a>
                </div>
                <div class="onglets">
                    <a href="index.html">acceuil</a>
                    <a href="inscription1.php">inscription</a>
                    <?php
                    session_start();
                    include("connexionBDD.php");
                    if(!isset($_SESSION["id"])){
                    echo "<a href='connexion1.php'>connexion</a>";
                    }
                    ?>
                    <a href="mailto:ottmanizaid1996@gmail.com">@Contact us </a>
                    <?php 
                    
                    include("connexionBDD.php");
                    if(isset($_SESSION["id"])){
                        echo "<a href='CompteTriathlete.php'>Bonjour  ";echo $_SESSION["prenom"];echo" </a>";
                        echo "<a href='deconnexion.php'>LOG OUT </a>";
                       
                    }
                    
                    ?>
                    
                   
                    
                </div>
            </nav>
            <div class="principal">
                <h1><b> Triathlon Grand Toulouse</b> </h1>
                <h2><i class="fas fa-swimmer"></i>
                    <i class="fas fa-running"></i>
                    <i class="fas fa-biking"></i>
                </h2>
                <br>
            </div>
        
    </header>
