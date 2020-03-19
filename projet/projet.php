<?php

    require('../connexion/connect.php');
    #On appelle le connect pour se connecter à la base de donnée

    require('../connexion/session.php');
     # On appelle aussi le compte utilisateur admin car on en aura besoin pour plus tard 

    $NumPro = $_POST['NumPro']; #récupère le NumPro

    $reponse = $bdPdo->prepare('SELECT * FROM projet WHERE NumPro = ?');
    #ici on créé une variable réponse qui appelle la base de donnée et on lui ordonne de récupérer toutes les informations de la table, rangées par date dans un ordre décroissant

    $reponse->execute([$NumPro]); #execute exécute la requete en remplaçant le "?" par le paramètre qu'on attendait (ici, le NumPro)
?>

	<!doctype html>
<html lang="fr">

<head>
    <?php  // On affiche chaque entrée une à une
$projets = $reponse->fetch()
   
  ?>

  <meta charset="utf-8">
 <title><?= $projets['LibTitrPro'] ?></title>
  <link rel="stylesheet" href="style.css">
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
                    <a class='connect' href='../formulaire/formulaire.php'>Ajouter un nouveau projet</a>
                </div>
            </div>
             <div class="col-lg-6">
                <a href="../connexion/disconnected.php">Déconnexion</a>
                </form>
            </div>
            <?php }
                else{
            ?>
            <a href="../connexion/login_form.php">Se connecter</a>
        </nav>
        <?php }
         ?>
    <a href="../index.php">Retour</a>
  </nav>

  <!-- Header project -->
  <header class="headerProjects">
    <div class="mainContainerProject">
      <!---->
      <svg xmlns="http://www.w3.org/2000/svg" width="422.401" height="230.968" viewBox="0 0 422.401 230.968"
        class="titleProjectHeader"></svg>

      <!---->
      <img class="containerPreview" src="<?= $projets['UrlPhoto'] ?>">
    </div>
  </header>

  <!-- Intro project -->
  <div class="containerIntroProject">
    <div class="introProject">

      <!-- Title project -->
      <h1><?= $projets['LibTitrPro'] ?></h1>
      <p><?= $projets['DtCreaPro'] ?></p>

       <!-- Chapo -->
       <p><?= $projets['LibChapo'] ?></p>


      <!-- Paragraphe 1 -->
      <p><?= $projets['Parag1'] ?></p>
      <!-- Paragraphe 2 -->
      <p><?= $projets['Parag2'] ?></p>
      <!-- conclusion -->
      <p><?= $projets['LibConclu'] ?></p>

      <!-- Auteur + lien qui renvoie au profil 
    <a class="date bottom" href="http://mariegoursaud.fr/">@Marie Goursaud</a> -->
    </div> 

    <div class="IntroProjectGreyBox"></div>
  </div>

	</body>
</html>