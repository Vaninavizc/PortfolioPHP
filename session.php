<?php 
if (isset($_SESSION['Connected']) && !empty($_SESSION['Connected'])) {
    $Connected = $_SESSION['Connected'];
}
else {
    $Connected = false;
}

#On détermine si l'utilisateur est connectée en tant qu'admin sur le site
?>