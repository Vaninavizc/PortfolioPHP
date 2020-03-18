<?php

    require ('connect.php');


        unset($_SESSION['Connected']);
        unset($_SESSION['login']);
        unset($_SESSION['pwd']);

        header ('location: index.php');


    #Déconnecte l'utilisateur quand il est connecté en tant qu'admin
?>