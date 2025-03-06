<?php
$pageTitle = "Détails Cv";
include_once "autoloader.php";
include "isAuthenticated.php";
include 'fragments/header.php';
$db = ConnexionDB::getInstance();
$id = $_GET['id'];
if (!isset($id)) {
    header('Location: index.php');
}

$cvRepository = new CvRepository();
$cv = $cvRepository->findById($id);
if (!$cv) {
    header('Location: index.php');
}
/* var_dump($cvs); */
?>
<div class="alert alert-success">
    Bienvenu dans votre espace
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Job</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row"></th>
            <th scope="row"><?= $cv['name'] ?></th>
            <td colspan="2"><?= $cv['age'] ?></td>
            <td><?= $cv['job'] ?></td>
        </tr>
    </tbody>
</table>
<?php include 'fragments/footer.php' ?>