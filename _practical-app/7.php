<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<?php

?>


<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">



		<?php

		/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/
		$connection = mysqli_connect('localhost', 'root', '', 'section7php', 3307);

		if (!$connection) {
			die('Database connection failed');
		}

		?>

		<?php
		function createUser()
		{
			global $connection;
			$fusername = $_POST['fusername'];
			$fpassword = $_POST['fpassword'];

			$query = "INSERT INTO users(username,password) ";
			$query .= "VALUES ('$fusername','$fpassword')";

			$result = mysqli_query($connection, $query);

			if (!$result) {
				die('Query FAILED: ' . mysqli_error($connection));
			} else {
				echo "<div class='alert alert-success'>Record created</div>";
			}
		}
		?>

		<?php
		if (isset($_POST['submit'])) {
			createUser();
		}
		?>

		<?php
		function readData()
		{
			global $connection;
			$query = "SELECT * FROM users";
			$result = mysqli_query($connection, $query);

			if (!$result) {
				die('Query FAILED: ' . mysqli_error($connection));
			}

			return $result;
		}
		?>

		<?php
		$result = readData();
		?>

		<!-- FORM -->

		<form action="7.php" method="post">
			<div class="form-group">
				<label for="fusername">Ingresar nombre de usuario</label>
				<input type="text" name="fusername" class="form-control" required placeholder="Example: Loper0123" />
			</div>
			<div class="form-group">
				<label for="fpassword">Ingrese password</label>
				<input type="password" name="fpassword" class="form-control" required placeholder="*******" />
			</div>
			<input type="submit" name="submit" value="SEND" class="btn btn-primary" />
		</form>

		<!-- READ DATA -->

		<div class="table-responsive">
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

	</article><!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>