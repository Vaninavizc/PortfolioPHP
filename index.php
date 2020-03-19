<?php

    require('connexion/connect.php');
    #On appelle le connect pour se connecter à la base de donnée

    require('connexion/session.php');
     # On appelle aussi le compte utilisateur admin car on en aura besoin pour plus tard 

    $reponse = $bdPdo->query('SELECT * FROM projet ORDER BY DtCreAPro DESC');
    #ici on créé une variable réponse qui appelle la base de donnée et on lui ordonne de récupérer toutes les informations de la table, rangées par date dans un ordre décroissant, le query execute directement

    $reponseCle = $bdPdo->query('SELECT * FROM projet ORDER BY DtCreAPro DESC');
    #Je créé la même variable pour les projets de Clélia

    $reponseV = $bdPdo->query('SELECT * FROM projet ORDER BY DtCreAPro DESC');
    #Je créé la même variable pour les projets de Vanina


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
            <div class="row">
                <div class="col-lg-6 text-center">
                    <a class='connect' href='formulaire/formulaire.php'>Ajouter un nouveau projet</a>
                </div>
                 <div class="col-lg-6 text-center">
                    <a class='connect' href='form_profil/form_pro.php'>Ajouter un nouveau profil</a>
                </div>
            </div>
             <div class="col-lg-6">
                <a href="connexion/disconnected.php">Déconnexion</a>
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
                <h3>
                    <a href="profil/profil.php?NumProfil=1"> Marie Goursaud</a>
                </h3>
            </div>
            <div class="projects"> 
                <main class="page-content">
            <?php  // On affiche chaque entrée une à une
            while ($projets = $reponse->fetch()) { 
                if ($projets['NumProfil'] == 1){ #Pour Marie, seuls s'affichent les projets liés au numéro de profil 1 soit le profil de Marie
                ?>
                    <div class="card Marie" style="background-image: url(<?= $projets['UrlPhoto'] ?>);">
                    <div class="content">
                        <h2 class="title"><?= $projets['LibTitrPro'] ?></h2>
                        <p class="copy"><?= $projets['LibChapo'] ?></p>
                        <time><?= $projets['DtCreaPro'] ?></time>
                    <form action= "projet/projet.php" method="POST" > 
                        <input type="hidden" name="NumPro" value="<?= $projets['NumPro'] ?>">
                        <button class="btn">VOIR</button>
                    </form>
                    </div>
                    </div>
                    <?php } } ?> 
                </main>
            </div>
        </section>

        <section>
            <div class="name">
               <h3>
                    <a href="profil/profil.php?NumProfil=2"> Clélia Guyon</a>
                </h3>
            </div>
            <div class="projects">
                <main class="page-content">
            <?php  // On affiche chaque entrée une à une
            while ($projetCle = $reponseCle->fetch()) { 
                if ($projetCle['NumProfil'] == 2){ #Pour Clélia, seuls s'affichent les projets liés au numéro de profil 2 soit le profil de Ckékua
                ?>
                    <div class="card Clelia" style="background-image: url(<?= $projetCle['UrlPhoto'] ?>);">
                    <div class="content">
                        <h2 class="title"><?= $projetCle['LibTitrPro'] ?></h2>
                        <p class="copy"><?= $projetCle['LibChapo'] ?></p>
                        <time><?= $projetCle['DtCreaPro'] ?></time>
                    <form action= "projet/projet.php" method="POST" > 
                        <input type="hidden" name="NumPro" value="<?= $projetCle['NumPro'] ?>">
                        <button class="btn">VOIR</button>
                    </form>
                    </div>
                    </div>
                    <?php } } ?>
                </main>
            </div>
        </section>

        <section>
            <div class="name">
                <h3>
                    <a href="profil/profil.php?NumProfil=3"> Vanina Idiart</a>
                </h3>
            </div>
            <div class="projects">
                <main class="page-content">
             <?php  // On affiche chaque entrée une à une
            while ($projetV = $reponseV->fetch()) { 
                if ($projetV['NumProfil'] == 3){ #Pour Vanina, seuls s'affichent les projets liés au numéro de profil 3 soit le profil de Vanina
                ?>
                    <div class="card van" style="background-image: url(<?= $projetV['UrlPhoto'] ?>);">
                    <div class="content">
                        <h2 class="title"><?= $projetV['LibTitrPro'] ?></h2>
                        <p class="copy"><?= $projetV['LibChapo'] ?></p>
                        <time><?= $projetV['DtCreaPro'] ?></time>
                    <form action= "projet/projet.php" method="POST" > 
                        <input type="hidden" name="NumPro" value="<?= $projetV['NumPro'] ?>">
                        <button class="btn">VOIR</button>
                    </form>
                    </div>
                    </div>
                    <?php } } ?>
                </main>
            </div>
        </section>

        <script src="js/app.js"></script>
      </body>

</html>