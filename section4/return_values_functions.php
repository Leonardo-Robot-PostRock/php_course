<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return values funcitions</title>
</head>

<body>
    <?php
    function addNumbers($number1, $number2)
    {
        $sum = $number1 + $number2;
        return $sum;
    }

    $result = addNumbers(323, 402);

    echo $result;

    echo '<br>';
    $result = addNumbers(698, $result);

    echo $result;
    echo '<br>';
    $result = addNumbers(198, $result);

    echo $result;
    ?>
</body>

</html>