<?php 

if(!isset($_SESSION["role"])) {
	header("Location: ./index.php?content=home");
} elseif(isset($_SESSION["role"]) && $_SESSION["role"] != "moderator" && $_SESSION["role"] != "root" && $_SESSION["role"] != "admin") {
	header("Location: ./index.php?content=home");
}

?>

m-home