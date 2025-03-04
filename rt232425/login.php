<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/bootstrap.css">
    <title>RT23</title>
</head>
<body>
    <div class="container">
        <form method="post" action="processLogin.php" enctype="multipart/form-data">
            email : <input name="email" type="text" class="form-control">
            password : <input name="password" type="password" class="form-control">
            file: <input name="fichier" type="file" class="form-control">
            <button class="btn btn-danger" type="submit">
                login
            </button>
        </form>
        <?php if(isset($_GET['errorMessage'])) { ?>
            <div class="alert alert-danger">
                <?= $_GET['errorMessage'] ?>
            </div>
        <?php } ?>    
    </div>
</body>
</html>