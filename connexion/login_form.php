   <?php
    require ('connect.php');
        if (isset($_SESSION['Connected']) && !empty($_SESSION['Connected'])) {
            $Connected = $_SESSION['Connected'];
        } #On ne peut que se connecter si l'utilisateur reconnait la connexion à la base de donnée
        else {
            $Connected = false;
        }
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
            <a href="../index.php">Retour</a>
        </nav>

      <form action="./admin.php" method="post">
        <div class="cont">
          <div class="form sign-in">
            <h2>Hello !</h2>
            <label>
              <span>Login</span>
              <input type="login" name="login" />
            </label>
            <label>
              <span>Mot de passe</span>
              <input type="password" name="pass" />
            </label>
            <button type="submit" class="submit">Se connecter</button>
          </div>
          <div class="sub-cont">
            <div class="img"> </div>
          </div>
        </div>
      </form>

      </body>

</html>