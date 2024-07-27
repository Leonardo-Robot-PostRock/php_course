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
    const CONSTANT_DEMO = 'Hello!!!';
    echo CONSTANT_DEMO . ' ' . NAME;

    const ANIMALS_DEMO = ['dog', 'cat', 'bird'];

    echo '<br>';

    foreach(ANIMALS_DEMO as $animal){
        echo $animal . PHP_EOL;
    }

    // Works as of PHP 5.3.0

    const CONSTANT = 'Hello World';


    echo CONSTANT;


    // Works as of PHP 5.6.0

    const ANOTHER_CONST = CONSTANT . '; Goodbye World';

    echo ANOTHER_CONST;


    const ANIMALS_V1 = array('dog', 'cat', 'bird');

    echo ANIMALS_V1[1]; // outputs "cat"


    // Works as of PHP 7

    define('ANIMALS', array(

        'dog',

        'cat',

        'bird'

    ));

    echo ANIMALS[1]; // outputs "cat"

    ?>
</body>

</html>