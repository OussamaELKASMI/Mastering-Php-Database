<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  

Étape 1: Créez une condition facultatif avec if, elseif et else pour enfin afficher la chaîne en disant, "I love greenchip :p"

Étape 2: Créez un forloop qui affiche 10 nombres

Étape 3: Créez une instruction switch qui teste à nouveau une condition avec 5 cas 

 */

 /*conditional function that returns a string message*/
function love($str){
if (!$str){
	echo "please enter a name";
}
else if (!$str == "greenchip"){
	echo "wrong name !";
}
else{
	echo "I love greenchip :p";
} 
}

love("greenchip");

echo nl2br("\r\n");

 /*for loop to display ten numbers*/
for($i = 0; $i<10; $i++){
echo $i;
}

 /*switch statment*/
$j = 0;
switch ($j){
	case 1:
	echo "it's the first case!";
	case 2:
	echo "it's the first case!";
	case 3:
	echo "it's the first case!";
	case 4:
	echo "it's the first case!";
	case 5:
	echo "it's the first case!";
}
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>