<?php  
	unset($_SESSION);
	session_destroy();
	echo "<div class='alert alert-danger mt-5 w-50 mx-auto' role='alert'>
				logged out.
			</div>";
	header("Refresh: 1, ./index.php?content=home");
?>