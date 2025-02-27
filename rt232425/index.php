<?php   
    $section = "RT2 G3 24/25";
    $names = ['aymen', "skander"];
    var_dump($GLOBALS);
    function printLi($name) {
        return "<li> $name </li>";
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1><?php echo $section ?></h1>
    <ol>
        <?php foreach ($names as $name) {
            echo printLi($name);
        }?>
    </ol>
</body>
</html>