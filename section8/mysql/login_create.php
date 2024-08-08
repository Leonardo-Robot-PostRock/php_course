<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php
if (isset($_POST['submit'])) {
    createUser();
}
?>

<?php include "../includes/header.php" ?>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-5 col-xs-6 h-auto">
            <h1 class="text-center">Create user</h1>
            <form action="login_create.php" method="post">
                <div class="form-group">
                    <label class="mb-2" for="username">Username</label>
                    <input type="text" name="username" class="form-control">

                </div>
                <div class="form-group">
                    <label class="my-2" for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <input type="submit" name="submit" value="CREATE" class="btn btn-primary mt-2">
            </form>
        </div>
<?php include "../includes/footer.php" ?>