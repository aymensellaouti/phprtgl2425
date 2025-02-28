<?php 
// elle va cahrger la session
session_start();

if (isset($_SESSION['nbVisite'])) {
    // Session 9dima
    $_SESSION['nbVisite'] = $_SESSION['nbVisite'] + 1;
    echo "Merci pour votre fidélité c'est votre visite numéro {$_SESSION['nbVisite']}";
} else {
    // Session Jdida
    $_SESSION['nbVisite'] = 1;
    echo "C'est votre première visite Bienvenu";
}