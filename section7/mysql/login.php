<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $connection = mysqli_connect('localhost', 'root', '', 'loginapp', 3307);

    if (!$connection) {
        die("Database connection failed");
    }
}
?>

<?php include "../includes/header.php" ?>

<div class="container">
    <div class="col-xs-6">
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">

            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary mt-2">
        </form>
    </div>
<?php include "../includes/footer.php"; ?>