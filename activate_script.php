<?php 
include 'db.php';

$token = filter_var($_POST['token'], FILTER_SANITIZE_STRING);
$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
$secondPassword = filter_var($_POST['secondPassword'], FILTER_SANITIZE_STRING);

if (empty($_POST['password']) || empty($_POST["secondPassword"])) {
	header("Location: ./index.php?content=message&alert=empty&token=$token");
} else if($password == $secondPassword){
	$sql = "SELECT * FROM `register` WHERE `password` = '$token'";

	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	if(mysqli_num_rows($result)){
		// var_dump($row);
		if($row['activated'] == 0) {
			$hashedPassword = password_hash($password, PASSWORD_BCRYPT);
			//$hashedPassword = mysql_real_escape_string($hashedPassword);
			$sql = "UPDATE `register` SET `password` = '$hashedPassword', `activated` = 1 WHERE `password` = '$token'";
			if (mysqli_query($conn, $sql)){
				header("Location: ./index.php?content=message&alert=passwordSuccess");
			}else {
				header("Location: ./index.php?content=message&alert=passwordFailed");
			}
		}else {
			header("Location: ./index.php?content=message&alert=alreadyActivated");
		}
		
	} else {
		header("Location: ./index.php?content=message&alert=tokenotfound");
	}	
} else {
	header("Location: ./index.php?content=message&alert=nomatch&token=$token");
}
	



 ?>