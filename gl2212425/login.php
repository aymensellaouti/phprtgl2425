<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="processLogin.php" method="post" enctype="multipart/form-data">
        <input name="email" type="text">
        <input name="password" type="password">
        <input type="file" name="fichier">
        <input type="submit">
    </form>
    <?php if (isset($_GET['errorMessage'])) { ?>
    <h2>
        <?=$_GET['errorMessage'] ?>
    </h2>
    <?php } ?>
</body>
</html>