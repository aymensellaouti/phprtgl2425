<?php 

var_dump($_POST);
var_dump($_GET);
var_dump($_FILES);
$email = strip_tags($_POST['email']);
$password = strip_tags($_POST['password']);
// $file = $_FILES['fichier'] ?? null;
// if (isset($file)) {
//     $newFileName = 'uploads/'.uniqid().$file['name'];
//     move_uploaded_file($file['tmp_name'], $newFileName);
// }

if ($email == "admin@gmail.com" && $password =="0000") {
    header("Location:home.php");
} else {
    header("Location:login.php?errorMessage=Please enter correct credentials");
}