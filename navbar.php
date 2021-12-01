<?php 
session_start();
if (isset($_GET["content"])) {
  $active = $_GET["content"];
} else {
  $active = "";
}

?>

<nav class="navbar navbar-expand-md navbar-light bg-light">
  	<a class="navbar-brand" href="./index.php?content=home">Shoes</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
  	</button>
  	<div class="collapse navbar-collapse" id="navbarNavDropdown">
		<ul class="navbar-nav">
			<!-- check for id and role is admin -->
			<?php if(isset($_SESSION["id"]) && $_SESSION["role"] == "admin") :?>
				<li class="nav-item <?php if($active == "a-home" || $active == ""){echo "active";} ?>">
					<a class="nav-link" href="index.php?content=a-home">Home <span class="sr-only">(current)</span></a>
		  		</li>
		  		<li class="nav-item <?php if($active == "shoes"){echo "active";} ?>">
					<a class="nav-link" href="index.php?content=shoes">Shoes</a>
		  		</li>
		  		<li class="nav-item <?php if($active == "laces"){echo "active";} ?>">
					<a class="nav-link" href="index.php?content=laces">Laces</a>
		  		</li>
		  		<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle <?php echo (in_array($active, ['leather', 'laces2', 'color']))? "active": "" ?>" href="#" id="navbarDropdownMenuLink" 	role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  		Tips
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					  	<a class="dropdown-item <?php if($active == "leather"){echo "active";} ?>" href="index.php?content=leather">Leather</a>
					  	<a class="dropdown-item <?php if($active == "laces2"){echo "active";} ?>" href="index.php?content=laces2">Laces</a>
					  	<a class="dropdown-item <?php if($active == "color"){echo "active";} ?>" href="index.php?content=color">Color</a>
					</div>
		  		</li>
		  		<li class="nav-item <?php if($active == "BMI"){echo "active";} ?>">
					<a class="nav-link" href="index.php?content=BMI">BMI</a>
		  		</li>
		  		<!-- check for id and role is root -->
		  		<?php elseif(isset($_SESSION["id"]) && $_SESSION["role"] == "root") : ?>
		  		<li class="nav-item <?php if($active == "r-home" || $active == ""){echo "active";} ?>">
					<a class="nav-link" href="index.php?content=r-home">Home <span class="sr-only">(current)</span></a>
		  		</li>
		  		<li class="nav-item <?php if($active == "shoes"){echo "active";} ?>">
					<a class="nav-link" href="index.php?content=shoes">Shoes</a>
		  		</li>
		  		<li class="nav-item <?php if($active == "laces"){echo "active";} ?>">
					<a class="nav-link" href="index.php?content=laces">Laces</a>
		  		</li>
		  		<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle <?php echo (in_array($active, ['leather', 'laces2', 'color']))? "active": "" ?>" href="#" id="navbarDropdownMenuLink" 	role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  		Tips
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					  	<a class="dropdown-item <?php if($active == "leather"){echo "active";} ?>" href="index.php?content=leather">Leather</a>
					  	<a class="dropdown-item <?php if($active == "laces2"){echo "active";} ?>" href="index.php?content=laces2">Laces</a>
					  	<a class="dropdown-item <?php if($active == "color"){echo "active";} ?>" href="index.php?content=color">Color</a>
					</div>
		  		</li>
		  		<li class="nav-item <?php if($active == "BMI"){echo "active";} ?>">
					<a class="nav-link" href="index.php?content=BMI">BMI</a>
		  		</li>
		  		<!-- check if id isset -->
		  		<?php elseif(isset($_SESSION["id"])): ?>
		  		<li class="nav-item <?php if($active == "home" || $active == ""){echo "active";} ?>">
					<a class="nav-link" href="index.php?content=home">Home <span class="sr-only">(current)</span></a>
		  		</li>
				<li class="nav-item <?php if($active == "shoes"){echo "active";} ?>">
					<a class="nav-link" href="index.php?content=shoes">Shoes</a>
		  		</li>
		  		<li class="nav-item <?php if($active == "laces"){echo "active";} ?>">
					<a class="nav-link" href="index.php?content=laces">Laces</a>
		  		</li>
		  		<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle <?php echo (in_array($active, ['leather', 'laces2', 'color']))? "active": "" ?>" href="#" id="navbarDropdownMenuLink" 	role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  		Tips
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					  	<a class="dropdown-item <?php if($active == "leather"){echo "active";} ?>" href="index.php?content=leather">Leather</a>
					  	<a class="dropdown-item <?php if($active == "laces2"){echo "active";} ?>" href="index.php?content=laces2">Laces</a>
					  	<a class="dropdown-item <?php if($active == "color"){echo "active";} ?>" href="index.php?content=color">Color</a>
					</div>
		  		</li>
		  		<li class="nav-item <?php if($active == "BMI"){echo "active";} ?>">
					<a class="nav-link" href="index.php?content=BMI">BMI</a>
		  		</li>
		  		<!-- if not set only see few thing -->
			<?php else :  ?>
				<li class="nav-item <?php if($active == "home" || $active == ""){echo "active";} ?>">
					<a class="nav-link" href="index.php?content=home">Home <span class="sr-only">(current)</span></a>
		  		</li>
		  		<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle <?php echo (in_array($active, ['leather', 'laces2', 'color']))? "active": "" ?>" href="#" id="navbarDropdownMenuLink" 	role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  		tips
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					  	<a class="dropdown-item <?php if($active == "leather"){echo "active";} ?>" href="index.php?content=leather">Leather</a>
					  	<a class="dropdown-item <?php if($active == "laces2"){echo "active";} ?>" href="index.php?content=laces2">Laces</a>
					  	<a class="dropdown-item <?php if($active == "color"){echo "active";} ?>" href="index.php?content=color">Color</a>
					</div>
		  		</li>
			<?php endif; ?>

		</ul>
		<ul class="navbar-nav ml-auto">
			<?php if(isset($_SESSION["id"]) && $_SESSION["role"] == "admin") :?>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle <?php echo (in_array($active, ['reset-password', 'users']))? "active": "" ?>" href="#" id="navbarDropdownMenuLink" 	role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  		admin pannel
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					  	<a class="dropdown-item <?php if($active == "users"){echo "active";} ?>" href="index.php?content=users">users</a>
					  	<a class="dropdown-item <?php if($active == "reset-password"){echo "active";} ?>" href="index.php?content=reset-password">reset password</a>
					</div>
		  		</li>
				<li class="nav-item <?php if($active == "logout"){echo "active";} ?>">
					<a class="nav-link" href="index.php?content=logout">logout</a>
		  		</li>
		  	
		  	<?php elseif(isset($_SESSION["id"]) && $_SESSION["role"] == "root") : ?>
		  		<li class="nav-item <?php if($active == "root"){echo "active";} ?>">
					<a class="nav-link" href="index.php?content=root">root page</a>
		  		</li>
				<li class="nav-item <?php if($active == "logout"){echo "active";} ?>">
					<a class="nav-link" href="index.php?content=logout">logout</a>
		  		</li>
		  	<?php elseif(isset($_SESSION["id"])) : ?>
				<li class="nav-item <?php if($active == "logout"){echo "active";} ?>">
					<a class="nav-link" href="index.php?content=logout">logout</a>
		  		</li>
		  	<?php else: ?>
		  		<li class="nav-item <?php if($active == "login"){echo "active";} ?>">
					<a class="nav-link" href="index.php?content=login&type=login">Login</span></a>
		  		</li>
		  		<li class="nav-item <?php if($active == "regristeren"){echo "active";} ?>">
					<a class="nav-link" href="index.php?content=login&type=register">Registeren</a>
		  		</li>
		  	<?php endif; ?>
		</ul>
  	</div>
</nav>