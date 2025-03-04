<?php 

// var_dump($_GET);
// var_dump($_POST);
// var_dump($_FILES);
// $file = $_FILES['fichier'];

// if (isset($file)) {
//     $newPath = "uploads/".uniqid().$file['name'];
//     move_uploaded_file(
//         $file['tmp_name'],
//         $newPath
//     );
// }

$email = strip_tags($_POST['email']);
$password = strip_tags($_POST['password']);

if (isset($email) && isset($password)) {
    if($email == "admin@gmail.com" && $password == "0000") {
        header("Location:home.php");
    } else {
        header("Location:login.php?errorMessage=Veuillez vérifier vos credentials");
    }
}