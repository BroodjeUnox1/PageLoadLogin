<?php 
session_start();
include 'db.php';
$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
$password = trim($password);
$email = trim($email);

if (empty($email) || empty($password)) {
	header("Location: ./index.php?content=message&alert=empty2");
} else {

	$sql = "SELECT * FROM register WHERE email = '$email'";
 	
 	$result = mysqli_query($conn, $sql);
 	if (!mysqli_num_rows($result)) {
		header("Location: ./index.php?content=message&alert=usernotfound");
 	} else {
 		$row = $result -> fetch_assoc();
 		if(!$row["activated"]) {
 			header("Location: ./index.php?content=message&alert=activateplease&email=$email");
 		} elseif (!password_verify($password, $row["password"])) {
 			header("Location: ./index.php?content=message&alert=nomatch");
 		} else {
 			// header("Location: ./index.php?content=message&alert=usernotfound");
 			$_SESSION["id"] = $row["id"];
 			$_SESSION["role"] = $row["role"];
 			switch ($row["role"]) {
 				case 'customer':
 					header("Location: ./index.php?content=c-home");
 					break;
 				case 'root':
 					header("Location: ./index.php?content=r-home");
 					break;
 				case 'admin':
 					header("Location: ./index.php?content=a-home");
 					break;
 				case 'moderator':
 					header("Location: ./index.php?content=m-home");
 					break;
 				
 				default:
 					header("Location: ./index.php?content=home");
 					break;
 			}
 		}
 	}
}
?>

// 10.1