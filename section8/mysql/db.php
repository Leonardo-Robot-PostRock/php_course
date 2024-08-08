<?php
$connection = mysqli_connect('localhost', 'root', '', 'loginapp', 3307);

if (!$connection) {
    die("Database connection failed");
}
