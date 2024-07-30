<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php
if (isset($_POST['submit'])) {
    updateUser();
}
?>

<?php include "../includes/header.php" ?>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-5 col-xs-6 h-auto">
        <div id="alert-placeholder"></div>
        <h1 class="text-center">Update user</h1>
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
                    getAllUsersById();
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
<?php include "../includes/scripts.php" ?>
</body>

</html>