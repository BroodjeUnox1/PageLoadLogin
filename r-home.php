<?php 

if(!isset($_SESSION["role"])) {
	header("Location: ./index.php?content=home");
} elseif(isset($_SESSION["role"]) && $_SESSION["role"] != "root") {
	header("Location: ./index.php?content=home");
}

?>

r-home