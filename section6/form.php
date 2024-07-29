<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "Hello " . $username . '<br>';
    echo "This is your password" . $password;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    echo $username;
}

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
        <input type="password" placeholder="Enter Password">
        <br>
        <input type="submit" name="submit">
    </form>
</body>

</html>