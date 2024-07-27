<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<section class="content">

	<aside class="col-xs-4">
		<?php Navigation(); ?>


	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">


		<?php


		/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

		echo pow(2, 5);
		echo '<br>';
		echo strtoupper('hola mundo');
		$list = [123, 34, 192, 435, 33, 26, 88, 6, 54, 987];
		echo '<br>';
		sort($list);
		foreach($list as $number){
			echo $number . PHP_EOL;
		}
		echo '<br>';
		arsort($list);
		foreach($list as $number){
			echo $number . PHP_EOL;
		}
		?>





	</article><!--MAIN CONTENT-->
	<?php include "includes/footer.php"; ?>