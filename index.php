<?php
// Définir le chemin de base
define('BASE_PATH', '/rsschool');

// Récupérer le chemin demandé
$requestedPage = $_GET['page'] ?? '';

// Fonction pour charger le contenu de la page
function loadPageContent($page) {
    $filePath = __DIR__ . "/template/$page.php";
    if (file_exists($filePath)) {
        include $filePath;
    } else {
        include  __DIR__ . "/template/accueil.php";
    }
}

// Inclure l'en-tête
include __DIR__ . '/template/inc/header.php';

// Charger le contenu de la page demandée
loadPageContent($requestedPage);

// Inclure le pied de page
include __DIR__ . '/template/inc/footer.php';
?>