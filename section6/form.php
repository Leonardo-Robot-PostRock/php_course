<?php

if (isset($_POST['submit'])) {
    $name  = array("Edwin", "Student", "Peter", "Leonardo", "Mohad", "Samid", "Jane", "Tom");
    $username = $_POST['username'];
    $password = $_POST['password'];

    $minimum = 5;
    $maximun = 10;

    echo "Hello " . $username . '<br>';
    echo "This is your password " . $password . "<br>";

    if (strlen($username) < $minimum) {
        echo "Username has to be longer than 5";
    }

    if (strlen($username) > $maximun) {
        echo "Username cannot be longer than 10";
    }

    if (!in_array($username, $name)) {
        echo "Sorry you are not allowed";
    }else{
        echo "Welcome";
    }
}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $username = $_POST['username'];
//     echo $username;
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form data in PHP</title>
</head>

<body>
    <form action="form.php" method="post">
        <input type="text" placeholder="Enter Username" name="username">
        <input type="password" placeholder="Enter Password" name="password">
        <br>
        <input type="submit" name="submit">
    </form>
</body>

</html>