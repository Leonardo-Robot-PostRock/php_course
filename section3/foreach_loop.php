<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>

<body>
    <?php
    $numbers = [20, 10, 50, 100, 429];
    $counter = 0;
    foreach ($numbers as $number) {

        echo $counter . ':' . $number . ', ';
        $counter++;
    }
    ?>
</body>

</html>