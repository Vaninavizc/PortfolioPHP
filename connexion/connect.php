<?php

	$server ="mysql:host=localhost;dbname=php"; #php, c'est le nom de notre base de donnée ça
	$user = "root" ;
    $password = ""; 

    try {
        $bdPdo = new PDO($server, $user, $password);
    }

    catch (PDOException $e) {
        echo 'Echec de connexion : ' . $e->getMessage();
    }

    $bdPdo->query('SET NAMES UTF8');

    
           session_start();


#Code pour se connecter à la base de donnée précédement créée (php)

?>

