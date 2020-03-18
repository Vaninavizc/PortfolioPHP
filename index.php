<?php

    require('connect.php');

    require('session.php');
     # On appelle aussi le compte utilisateur admin car on en aura besoin pour plus tard 

    $reponse = $bdPdo->query('SELECT * FROM projet ORDER BY DtCreAPro DESC');

?>


<!doctype html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="initial-scale=1">

</head>

    <body>

        <nav>
            <h1> Les Trois Mousquetaires <br> Portfolios</h1>
            <?php 
                if($Connected == true){
            ?>
             <div class="col-lg-6">
                <a href="disconnected.php">Déconnexion</a>
                </form>
            </div>
            <?php }
                else{
            ?>
            <a href="connexion/login_form.php">Se connecter</a> 
        </nav>
        <?php }
         ?>
       
        <section>
            <div class="name">
                <h3>Marie Goursaud</h3>
            </div>
            <div class="projects"> 
                <main class="page-content">
              <?php  // On affiche chaque entrée une à une
            while ($projets = $reponse->fetch()) { 
                if ($projets['NumProfil'] == 1){
                ?>
                    <div class="card Marie" style="background-image: url(<?= $projets['UrlPhoto'] ?>);">
                    <div class="content">
                        <h2 class="title"><?= $projets['LibTitrPro'] ?></h2>
                        <p class="copy"><?= $projets['LibChapo'] ?></p>
                        <time><?= $projets['DtCreaPro'] ?></time>
                        <button class="btn">VOIR</button>
                    </div>
                    </div>
                    <?php } } ?>
                </main>
            </div>

        </section>

        <section>
            <div class="name">
                <h3>Clélia Guyon</h3>
            </div>
            <div class="projects">
                <main class="page-content">
                    <div class="card Clelia">
                    <div class="content">
                        <h2 class="title">Recette de Raccoon</h2>
                        <p class="copy">Miam miam </p>
                        <button class="btn">VOIR</button>
                    </div>
                    </div>
                    <div class="card Clelia">
                    <div class="content">
                        <h2 class="title">Je sens l'odeur et ça me dégoute</h2>
                        <p class="copy">BEURK</p>
                        <button class="btn">VOIR</button>
                    </div>
                    </div>
                    <div class="card Clelia">
                    <div class="content">
                        <h2 class="title">Ville : Toulouse</h2>
                        <p class="copy">Rue : Lautrec</p>
                        <button class="btn">VOIR</button>
                    </div>
                    </div>
                    <div class="card Clelia">
                    <div class="content">
                        <h2 class="title">Blah blah blah blah cactus</h2>
                        <p class="copy">Ferme la porte t'as des cactus dans l'sas</p>
                        <button class="btn">VOIR</button>
                    </div>
                    </div>
                </main>
            </div>
        </section>

        <section>
            <div class="name">
                <h3>Vanina Idiart</h3>
            </div>
            <div class="projects">
                <main class="page-content">
                    <div class="card van">
                    <div class="content">
                        <h2 class="title">Vintage vibes</h2>
                        <p class="copy">Old things are better</p>
                        <button class="btn">VOIR</button>
                    </div>
                    </div>
                    <div class="card van">
                    <div class="content">
                        <h2 class="title">l'Histoire mgl</h2>
                        <p class="copy">CC François</p>
                        <button class="btn">VOIR</button>
                    </div>
                    </div>
                    <div class="card van">
                    <div class="content">
                        <h2 class="title">J'aime les fleurs</h2>
                        <p class="copy">Je sais pas trop en prendre soin</p>
                        <button class="btn">VOIR</button>
                    </div>
                    </div>
                    <div class="card van">
                    <div class="content">
                        <h2 class="title">LES FOULARDS</h2>
                        <p class="copy">All my life</p>
                        <button class="btn">VOIR</button>
                    </div>
                    </div>
                </main>
            </div>
        </section>

        <script src="js/app.js"></script>
      </body>

</html>