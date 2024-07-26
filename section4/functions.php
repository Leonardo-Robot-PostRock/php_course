<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>
    <?php
    function init()
    {
        say_something();
        calculate();
    }

    
    function calculate(){
        echo 45 * 32;
    }
    function say_something(){
        echo "Multiplication <br>";
    }
    init();
    ?>
</body>

</html>