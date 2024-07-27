<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">


		<?php

		/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */

		function calculate(){
			$number1 = 20;
			$number2 = 40;

			return $number1 * $number2;
		}

		echo calculate() . '<br>';

		function dynamicCalculation($number1, $number2)
		{
			$result = $number1 * $number2;
			return $result;
		}

		$result = dynamicCalculation(2, 4);

		echo $result;

		?>





	</article><!--MAIN CONTENT-->


	<?php include "includes/footer.php"; ?>