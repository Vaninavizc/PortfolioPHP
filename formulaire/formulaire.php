<?php

    require('../connexion/connect.php');
    #On appelle le connect pour se connecter à la base de donnée

    require('../connexion/session.php');
     # On appelle aussi le compte utilisateur admin car on en aura besoin pour plus tard 

    $reponse = $bdPdo->query('SELECT * FROM projet ORDER BY DtCreAPro DESC');
    #ici on créé une variable réponse qui appelle la base de donnée et on lui ordonne de récupérer toutes les informations de la table, rangées par date dans un ordre décroissant, le query execute directement

    $rep = $bdPdo->query('SELECT * FROM profile');
    #ici on créé une variable réponse qui appelle la base de donnée et on lui ordonne de récupérer toutes les informations de la table, rangées par date dans un ordre décroissant

    

?>

<!doctype html>
<html lang="fr">

<head>
  <?php  // On affiche chaque entrée une à une
$projets = $reponse->fetch()
  ?>

  <meta charset="utf-8">
  <title>Formulaire</title>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="initial-scale=1">

</head>
<!-- Numéro, date, libélé (donc titre), chapo, p1, p2, conclu et image, profil -->

<body>

 <nav>
    <h1> Les Trois Mousquetaires <br> Portfolios</h1>
    <?php 
                if($Connected == true){
            ?>
            <div class="row">
                 <div class="col-lg-6 text-center">
                    <a class='connect' href='../form_profil/form_pro.php'>Ajouter un nouveau profil</a>
                </div>
            </div>
             <div class="col-lg-6">
                <a href="../connexion/disconnected.php">Déconnexion</a>
                </form>
            </div>
            <?php }
                else{
                   echo '<body onLoad="alert(\'Vous devez être connecté en mode admin pour faire cela !\')">';
                   echo '<meta http-equiv="refresh" content="0;URL=../connexion/login_form.php">';
                 }
            ?>
        <a href="../../index.php">Retour</a>
  </nav>

  <h4>Tiens tiens, voilà du nouveau ... !</h4>

  <div class="form">
    <div class="part1">

      <br>

      <form name="inscription" method="post" action="saisie.php">
      
      <div class="dropdown">
        <button class="dropbtn">Qui a mené l'enquête ?</button>
        <div class="dropdown-content">
          <a href="#">Marie Goursaud</a>
          <a href="#">Clélia Guyon</a>
          <a href="#">Vanina Idiart</a>
        </div>
      </div>

      <label for="DtCreAPro" >
        <span>Date du crime</span>
        <<input type="date" name="DtCreAPro"/>
      </label>

      <label for="LibTitrPro">
        <span>Titre de l'enquête</span>
        <textarea name="LibTitrPro" id="Titr" cols="34" rows="1"></textarea>
      </label>

      <label for="LibChapo">
        <span>Phrase d'introduction</span>
        <textarea name="LibChapo" id="Chapo" cols="34" rows="1"></textarea>
      </label>
    </div>
    <div class="part2">
      <label for="Parag1">
        <span>Paragraphe 1</span>
        <textarea name="Parag1" id="Paragraphe1" cols="30" rows="5"></textarea>
      </label>

     <label for="Parag2">
        <span>Paragraphe 2</span>
        <textarea name="Parag2" id="Paragraphe2" cols="30" rows="5"></textarea>
      </label>

      <label for="LibConclu">
        <span>Alors t'as conclu ?</span>
        <textarea name="LibConclu" id="Conclusion" cols="30" rows="5"></textarea>
      </label>

      <label>
        <span>Paye ton copyright</span>
        <input type="file" />
      </label>

<input name="valid" type="submit" value="SUBMIT">
    </form>
    </div>


<!--  </div>
  <center><button class="btn">ENREGISTRER</button></center>
</body> !-->

</html>