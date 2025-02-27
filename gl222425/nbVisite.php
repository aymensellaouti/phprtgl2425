<?php 
session_start();
if (isset($_SESSION['nbVisite'])){
    $nbVisite = $_SESSION['nbVisite'] + 1;
    echo "Merci pour votre fidélité c'est votre $nbVisite éme visite";
    $_SESSION['nbVisite'] = $nbVisite;
} else {
    echo "Bienvenu c'est votre première visite";
    $_SESSION['nbVisite'] = 1;
}