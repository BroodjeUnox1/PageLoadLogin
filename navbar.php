<?php  
if (isset($_GET["content"])) {
  $active = $_GET["content"];
} else {
  $active = "";
}

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  	<a class="navbar-brand" href="./index.php?content=home">Shoes</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
  	</button>
  	<div class="collapse navbar-collapse" id="navbarNavDropdown">
		<ul class="navbar-nav">
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
				<a class="nav-link dropdown-toggle <?php echo (in_array($active, ['leather', 'laces2', 'color']))? "active": "" ?>" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  		Tips
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				  	<a class="dropdown-item <?php if($active == "leather"){echo "active";} ?>" href="index.php?content=leather">Leather</a>
				  	<a class="dropdown-item <?php if($active == "laces2"){echo "active";} ?>" href="index.php?content=laces2">Laces</a>
				  	<a class="dropdown-item <?php if($active == "color"){echo "active";} ?>" href="index.php?content=color">Color</a>
				</div>
		  	</li>
		</ul>
  	</div>
</nav>