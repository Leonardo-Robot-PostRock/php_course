<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // https://www.php.net/manual/en/book.array.php
    $list = [231, 124, 543, 776, 223, 145, 347, 975];

    echo max($list);
    echo '<br>';
    echo min($list);
    echo '<br>';
    echo sort($list);
    ?>
</body>

</html>