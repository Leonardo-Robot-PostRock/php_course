<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php
if (isset($_POST['submit'])) {
    updateUser();
}
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-5 col-xs-6 h-auto">
            <div id="alert-placeholder"></div>
            <form id="update-form" action="login_update.php" method="post">
                <div class="form-group">
                    <label class="mb-2" for="username">Username</label>
                    <input type="text" name="username" class="form-control">

                </div>
                <div class="form-group">
                    <label class="my-2" for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <select class="form-select mt-2" name="id" id="id" aria-label="Select an ID">
                        <option value="" selected disabled>Select and ID to update an user</option>
                        <?php
                        showData();
                        ?>
                    </select>
                </div>
                <input type="submit" name="submit" value="UPDATE" class="btn btn-success mt-2">
            </form>
        </div>
    </div>

    <script>
        const alertPlaceholder = document.getElementById('alert-placeholder');

        const appendAlert = (message, type) => {
            const wrapper = document.createElement('div');
            wrapper.innerHTML = [
                `<div class="alert alert-${type} alert-dismissible" role="alert">`,
                `   <div>${message}</div>`,
                '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
                '</div>'
            ].join('');

            alertPlaceholder.append(wrapper);
        };

        document.getElementById('update-form').addEventListener('submit', function(event) {
            const id = document.getElementById('id').value;

            if (id === '') {
                event.preventDefault();
                appendAlert('Por favor seleccione un ID para actualizar usuario', 'warning');
            } else {
                alertPlaceholder.innerHTML = '';
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>