
<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

	<?php  

/*  
	Étape 1: Créez un formulaire qui soumet une seule valeur à POST (super global)
 */

	
?>

<form action="" method="POST">
	<input type="text" name="age">
	<button type="submit" name="submit">SUBMIT YOUR AGE</button>
</form>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>