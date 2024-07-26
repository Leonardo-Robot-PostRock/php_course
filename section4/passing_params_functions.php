<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passing params</title>
</head>

<body>
    <?php
    function greeting($message)
    {
        echo $message;
    }

    greeting("Hi Customer how are you?<br>");

    ?>

    <?php
    function calculate($number1, $number2)
    {
        $sum = $number1 + $number2;
        echo $sum;
    }

    calculate(1212, 5319);

    ?>
</body>

</html>