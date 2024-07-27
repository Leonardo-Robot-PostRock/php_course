<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings functions</title>
</head>

<body>
    <?php
    // https://www.php.net/manual/en/ref.strings.php
    $strings = "Hello students do you like the class";

    echo strlen($strings);
    echo '<br>';
    echo strtoupper($strings);
    echo '<br>';
    echo strtolower($strings);
    ?>
</body>

</html>