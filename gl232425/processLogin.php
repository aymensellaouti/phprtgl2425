<?php 

    // var_dump($_GET);
    // var_dump($_POST);
    // var_dump($_FILES); 

    // if (isset($_FILES['fichier'])) {
    //     // as.jpg => uploads/12345667as.jpg
    //     $newFilePath = "uploads/".uniqid().$_FILES['fichier']['name'];
    //     move_uploaded_file($_FILES['fichier']['tmp_name'], $newFilePath);
    // }
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (isset($email) && isset($password)) {
        if ($email == "admin@gmail.com" && $password == "0000") {
            header("Location:home.php");
        } else {
            header("Location:login.php?errorMessage=Veuillez vérifier vos crédentials");
        }
    }