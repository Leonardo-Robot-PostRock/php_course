<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>

	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">

		<?php

		/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



			Step 2: Make a forloop  that displays 10 numbers


			Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

		$voteForPHP = 10;
		if ($voteForPHP <= 6) {
			echo "I don't like PHP";
		} elseif ($voteForPHP >= 7 && $voteForPHP <= 9) {
			echo "I like PHP";
		} else {
			echo "I love PHP";
		}

		echo '<br>';
		for ($i = 0; $i <= 10; $i++) {
			if ($i != 10) {
				echo $i . ', ';
			} else {
				echo $i;
			}
		}

		echo '<br>';
		$number = 6;

		switch ($number) {
			case 1:
				echo "The number is 1";
				break;
			case 2:
				echo "The number is 2";
				break;
			case 3:
				echo "The number is 3";
				break;
			case 4:
				echo "The number is 4";
				break;
			case 5:
				echo "The number is 5";
				break;
			default:
				echo "The number can not be greater than 5";
		}

		?>






	</article><!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>