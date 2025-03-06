<?php
$pageTitle = "Home";
include "class/autoloader.php";
include "isAuthenticated.php";
include 'fragments/header.php';
$cvRepository = new CvRepository();
$cvs = $cvRepository->findAll();
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
            <th scope="col">Options</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($cvs as $cv): ?>
            <tr>
                <th scope="row"></th>
                <th scope="row"><?= $cv->job ?></th>
                <td colspan="2"><?= $cv->name ?></td>
                <td><?= $cv->age ?></td>
                <td>
                    <a href="detailsCv.php?id=<?= $cv->id ?>">Détails</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?php include 'fragments/footer.php' ?>