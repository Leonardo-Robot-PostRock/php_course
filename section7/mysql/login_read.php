<?php include "db.php" ?>
<?php include "functions.php" ?>

<?php
$result = getAllData();
?>


<?php include "../includes/header.php" ?>

<div class="container min-vh-100 d-flex justify-content-center align-items-center">
    <div class="col-12 col-sm-12">
        <h1 class="text-center">Users table</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo htmlspecialchars($row['id']); ?></th>
                        <td><?php echo htmlspecialchars($row['username']); ?></td>
                        <td><?php echo htmlspecialchars($row['password']); ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php include "../includes/footer.php"; ?>

    <?php
    mysqli_close($connection);
    ?>