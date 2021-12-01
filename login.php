<?php  
	$type = "";
	if (isset($_GET['type'])) {
		$type = $_GET['type'];
	} else {
		$type = "login";
	}
?>

<div class="col-xs-12 text-center">
	<a href="index.php?content=login&type=login" class="px-5 login-panel <?php if($type == "login") echo "actief"?>">Login</a>
	<a href="index.php?content=login&type=register" class="px-5 login-panel <?php if($type == "register") echo "actief"?>">Register</a>
</div>
<hr>

<?php include($type . "-panel.php");?>
