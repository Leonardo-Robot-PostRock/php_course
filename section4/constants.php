<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>

<body>
    <?php
    $number = 10;
    $number = 1000;
    echo $number;
    echo '<br>';

    //constant variable
    define("NAME", 'Leonardo');
    // other way
    const CONSTANT = 'Hello!!!';
    echo CONSTANT . ' ' . NAME;
    ?>
</body>

</html>