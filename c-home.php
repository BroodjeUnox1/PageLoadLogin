<?php 

	if(!isset($_SESSION["role"])) {
	header("Location: ./index.php?content=home");
} 
?>

c-home