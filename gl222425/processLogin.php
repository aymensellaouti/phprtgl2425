<?php

var_dump($_GET);
var_dump($_POST);
var_dump($_FILES);
// if (isset($_FILES['fichier'])) {
//     $newFileName = 'uploads/'.uniqid().$_FILES['fichier']['name'];
//     copy($_FILES['fichier']['tmp_name'], $newFileName);
// }

if (isset($_POST['email']) && $_POST['password']) {
    if ($_POST['email'] == "admin@gmail.com" && $_POST['password'] == "0000") {
        header("Location:home.php");
    } else {
        header("Location:login.php?errorMessage=veuillez vérifier vos credentials");
    }
}