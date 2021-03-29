<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		


		<?php

		/* 
		Étape 1: Créez 2 variables appelées number1 et number2 et affecté au number1 la valeur 10 et le deuxième la valeur 20

		Étape 2: Ajoutez les deux variables et affichez la somme avec écho:

		Étape 3: Créez 2 tableaux avec les mêmes valeurs, l'un régulier et l'autre associatif

		Étape 4: Créez une constante et définissez-la sur la valeur de PHP. et utilisez un écho pour l'afficher

			 */

			/*initializing the variables */
			$number1 = 10;
			$number2 = 20;

			/*Additiong of the variables */
			echo "number1 + number2 =". " ". $number1 + $number2;

			/*init of two arrays */
			$regular = ["EL KASMI", "Oussama"];
			$associative = ["name" => "EL KASMI", "prename" => "Oussama"];


			/*init of a const variable */
			define("constVar", "PHP");
			echo nl2br("\r\n");
			echo constVar; 
			
		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>