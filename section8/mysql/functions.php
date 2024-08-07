<?php
include "db.php";

function createUser()
{
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];

    /* Escape characters for security in our database */
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $hashFormat = "$2y$10$";

    $salt = "abcdefghijklmnopqrstuvwx";
    $hash_and_salt = $hashFormat . $salt;

    $password = crypt($password, $hash_and_salt);

    $query = "INSERT INTO users(username,password) ";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query FAILED' . mysqli_error($connection));
    } else {
        echo "<div class='alert alert-success'>Record created</div>";
    }
}

function getAllData()
{
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query FAILED: ' . mysqli_error($connection));
    }
    return $result;
}

function getAllUsersById()
{
    global $connection;
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query FAILED' . mysqli_error($connection));
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function updateUser()
{
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = isset($_POST['id']) ? $_POST['id'] : '';

    if ($id) {
        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("QUERY FAILED" . mysqli_error($connection));
        }
    }
}

function deleteUser()
{
    global $connection;
    $id = isset($_POST['id']) ? $_POST['id'] : '';

    if ($id) {
        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("QUERY FAILED" . mysqli_error($connection));
        }
    }
}
