<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statement</title>
</head>

<body>
    <?php
    $number = 44;

    switch ($number) {
        case 34:
            echo "is it 34";
            break;
        case 37:
            echo "is it 37";
            break;
        case 35:
            echo "is it 35";
            break;
        case 27:
            echo "is it 27";
            break;
        case 44:
            echo "is it 44";
            break;
        default:
            echo "we could not find anything";
            break;
    }

    ?>
</body>

</html>