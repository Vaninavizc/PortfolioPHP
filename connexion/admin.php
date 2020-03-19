<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>Se connecter</title>
        </head>
        <body>
        <h1>
            Connexion en cours
        </h1>
    </body>
</html>
<?php
    require('connect.php');
        
    if (isset($_POST['login']) && isset($_POST['pass'])) {
        $requete = "SELECT * FROM USER WHERE 1"; 
        $query = $bdPdo->prepare($requete);
        $obj = $bdPdo->query ($requete);
        foreach ($obj as $key => $array) {
                $valid_email = $array[0];
                $valid_password = $array[1];
            if ($valid_email == $_POST['login'] && $valid_password == $_POST['pass']) {
                $_SESSION['Connected'] = true;
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['pass'] = $_POST['pass'];
                header ('location: ../index.php');   #Si toutes les données correspondent, l'utilisateur est automatiquement renvoyé vers la page index
                //header ('location: login_form.php');
                die;
            }

            
            
        }
    /*else {
        echo 'Les variables du formulaire ne sont pas déclarées.';
    }*/
            $_SESSION['Connected'] = false;
            $_SESSION['login'] = null;
            $_SESSION['pass'] = null;
            echo '<body onLoad="alert(\'Admin non reconnu...\')">'; # L'utilisateur reçoit ici un message lui disant que on ne le reconnait pas dans la base de donnée
            echo '<meta http-equiv="refresh" content="0;URL=login_form.php">';
            #ici on vérifie que toutes les coordonées de l'utilisateur correspondent avec ce qui est inscrit dans las base de donnée, si elles ne correspondent pas, l'utilisateur est renvoyé vers la page login_form pour retenter de se connecter
    }
?>