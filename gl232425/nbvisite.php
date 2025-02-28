<?php 
// On a ouvert la session
session_start();

// première visite 
if (!isset($_SESSION['nbVisite'])){
    $_SESSION['nbVisite'] = 1;
    echo "Bienvenu c'est votre première visite";
} else {
// néme visite
    $_SESSION['nbVisite'] ++;
    echo "Merci pour votre fidélité c'est votre {$_SESSION['nbVisite']}"; 
}
