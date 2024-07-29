<?php

if (isset($_POST['submit'])) {
    $name  = array("Edwin", "Student", "Peter", "Leonardo", "Mohad", "Samid", "Jane", "Tom");
    $username = $_POST['username'];
    $password = $_POST['password'];

    $minimum = 5;
    $maximun = 10;

    if (strlen($username) < $minimum) {
        echo "Username has to be longer than 5";
    }

    if (strlen($username) > $maximun) {
        echo "Username cannot be longer than 10";
    }

    if (!in_array($username, $name)) {
        echo "Sorry you are not allowed";
    } else {
        echo "Welcome";
    }
}