<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays associative</title>
</head>

<body>
    <?php
    // $number = array(10, 20, 49,);
    $number = array('juanita', 'maria', 'jose');
    // echo $number[2] . '<br>';
    $names = ["first_name" => 'Leonardo'];
    //or (it's the same)
    $names2 = array("first_name" => 'Leonardo', "Last_Name" => 'Puebla');

    print_r($number);
    echo '<br>';
    print_r($names2);
    echo '<br>';
    echo $names['first_name'] . ' '; //associated array by label
    echo $names2['Last_Name']; //associated array by label
    ?>
</body>

</html>