<?php
include_once 'autoloader.php';
/* include_once 'class/Person.php'; */
$section = "GL223";
$names = [
    "aymen",
    "skander"
];
$user = ['name' => "sellaouti", "firstnam" => "aymen"];
var_dump($GLOBALS);
$person = new Person();
$person2 = new Person(name: "sellaouti", age: 42);
$person2->whoAmI();
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
        <?php for ($i = 0; $i < count($names); $i++) { ?>
            <li><?php echo $names[$i] ?></li>
        <?php } ?>
        <ul>
            <?php foreach ($user as $key => $value): ?>
                <li><?php echo "$key : $value" ?></li>
            <?php endforeach ?>
        </ul>
    </ol>
</body>

</html>