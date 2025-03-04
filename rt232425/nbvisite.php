<?php 
session_start();
var_dump($_SESSION);
if (!isset($_SESSION['nbvisite'])) {
    // premiere fois 
    $_SESSION['nbvisite'] = 1;
    echo "Bienvenu c'est votre première visite";
} else {
    // neme fois 
    $_SESSION['nbvisite'] += 1;
    echo "Bienvenu, merci pour votre fidélité, c'est votre visite numéro {$_SESSION['nbvisite']}";
}
