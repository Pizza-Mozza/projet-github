<?php
require_once '../controllers/UtilisateurController.php';

if ($_SERVER['REQUEST_URI'] === '/inscription') {
    (new UtilisateurController())->inscription();
} elseif ($_SERVER['REQUEST_URI'] === '/connexion') {
    (new UtilisateurController())->connexion();
} else {
    header('HTTP/1.0 404 Not Found');
    echo "Page non trouvée";
}
