<?php

$connection = mysqli_connect('localhost', 'root', '', 'loginapp', 3307);

if ($connection) {
    echo "We are connected";
} else {
    die("Database connection failed");
}

$query = "SELECT * FROM users ";

$result = mysqli_query($connection, $query);

if (!$result) {
    die('Query FAILED' . mysqli_error($connection));
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-6 col-sm-6">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <pre>
                    <?php
                    print_r($row);
                    ?>
                </pre>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>