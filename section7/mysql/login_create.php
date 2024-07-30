<?php include "db.php";?>
<?php include "functions.php";?>

<?php
if (isset($_POST['submit'])) {
    createUser();
}
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login app - create user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
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
    </div>
</body>

</html>