

empty (password $$ voeg token toe)
no match (password $$ voeg token toe)
tokennotfound
alreadyActivated
passwordSuccess
passwordFailed (password $$ voeg token toe)
empty2

<?php
$token = (isset($_GET['token'])) ? $_GET['token'] : '';
$email = (isset($_GET['email'])) ? $_GET['email'] : '';
switch ($_GET["alert"]) {
	case 'no-email':
		echo "<div class='alert alert-warning mt-5 w-50 mx-auto' role='alert'>
				Please fill in a e-mail.
			</div>";
		header("Refresh: 3, ./index.php?content=register-panel");
		break;
	case 'email-exists':
		echo "<div class='alert alert-danger mt-5 w-50 mx-auto' role='alert'>
				Email already exists, please enter a new email
			</div>";
		header("Refresh: 3, ./index.php?content=login&type=register");
		break;
	case 'dbfault':
		echo "<div class='alert alert-danger mt-5 w-50 mx-auto' role='alert'>
				Oh oh, something went wrong please contact administrator.
			</div>";
		header("Refresh: 3, ./index.php?content=home");
		break;
	case 'success':
		echo "<div class='alert alert-success mt-5 w-50 mx-auto' role='alert'>
				Created account pleas check your email to activate it.
			</div>";
		header("Refresh: 3, ./index.php?content=home");
		break;
	case 'forbidden':
		echo "<div class='alert alert-danger mt-5 w-50 mx-auto' role='alert'>
				Nope.
			</div>";
		header("Refresh: 3, ./index.php?content=home");
		break;
	case 'empty':
		echo "<div class='alert alert-warning mt-5 w-50 mx-auto' role='alert'>
				Please dont leave something empty
			</div>";
		header("Refresh: 3, ./index.php?content=activate_script&token=$token");
		break;
	case 'nomatch':
		echo "<div class='alert alert-warning mt-5 w-50 mx-auto' role='alert'>
				Please enter identical information.
			</div>";
		header("Refresh: 3, ./index.php?content=activate&token=$token");
		break;
	case 'tokenotfound':
		echo "<div class='alert alert-danger mt-5 w-50 mx-auto' role='alert'>
				Token not found.
			</div>";
		header("Refresh: 3, ./index.php?content=home");
		break;
	case 'alreadyActivated':
		echo "<div class='alert alert-warning mt-5 w-50 mx-auto' role='alert'>
				Account is already activated.
			</div>";
		header("Refresh: 3, ./index.php?content=home");
		break;
	case 'passwordSuccess':
		echo "<div class='alert alert-success mt-5 w-50 mx-auto' role='alert'>
				Account activated.
			</div>";
		header("Refresh: 3, ./index.php?content=login&type=login");
		break;
	case 'passwordFailed':
		echo "<div class='alert alert-danger mt-5 w-50 mx-auto' role='alert'>
				Something went wrong please contact administrator.
			</div>";
		header("Refresh: 3, ./index.php?content=home");
		break;
	case 'alreadyActivated':
		echo "<div class='alert alert-warning mt-5 w-50 mx-auto' role='alert'>
				Account is already activated.
			</div>";
		header("Refresh: 3, ./index.php?content=home");
		break;
	case 'empty2':
		echo "<div class='alert alert-warning mt-5 w-50 mx-auto' role='alert'>
				Please dont leave something empty
			</div>";
		header("Refresh: 3, ./index.php?content=login&type=login");
		break;
	case 'usernotfound':
		echo "<div class='alert alert-warning mt-5 w-50 mx-auto' role='alert'>
				please enter a valid email or password.
			</div>";
		header("Refresh: 3, ./index.php?content=login&type=login");
		break;
	case 'activateplease':
		echo "<div class='alert alert-warning mt-5 w-50 mx-auto' role='alert'>
				Please check your email <span class='badge badge-danger p-2'>$email</span> before loggin in.
			</div>";
		header("Refresh: 5, ./index.php?content=home");
		break;
	
	default:
		header("Refresh: 3, ./index.php?content=home");
		break;
}
?>

