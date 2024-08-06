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

		if(!$connection){
			die('Database connection failed');
		}

		

		?>

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




	</article><!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>