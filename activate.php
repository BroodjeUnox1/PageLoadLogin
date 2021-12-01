<?php  
if (isset($_GET["token"])) {
	$token = $_GET["token"];
} else {
	header("Location: ./index.php?content=message&alert=forbidden");
}
?>

<div class="container mt-5">
	<form style="max-width: 700px;" class="mx-auto my-auto" action="activate_script.php" method="POST">
		<div class="form-group">
			<input type="hidden" name="token" value="<?php echo $token?>">
	    	<label for="exampleInputEmail1">Password</label>
	    	<input type="password" class="form-control" name="password" placeholder="Enter password" required="" id="password" autofocus="">
	    	<small>Choose a safe password</small>
		</div>
		<div class="form-group">
	    	<label for="exampleInputEmail1">Repeat password</label>
	    	<input type="password" class="form-control" name="secondPassword" placeholder="Repeat password" required="" id="secondPassword">
	    	<small>make sure the passwords are the same</small>
		</div>
		<div class="form-group">
		    <div class="row">
		        <div class="col-sm-12 mx-auto" style="max-width: 300px;">
		            <input type="submit" name="activate" tabindex="4" class="form-control btn btn-login" value="Activate account">
		        </div>
		    </div>
		</div>
	</form>
	<div class="container" style="max-width: 700px;">
		<p class="text-success">Generate a password below</p>
		<div class="form-group">
	    	<label>Upper</label>
			<input type="checkbox" name="upper" id="upper" class="mx-1">
	    	<label>Lower</label>
			<input type="checkbox" name="lower" id="lower" class="mx-1">
			<label>SpecialChar</label>
	    	<input type="checkbox" name="specialChar" id="specialChar" class="mx-1">
	    	<label>Numbers</label>
	    	<input type="checkbox" name="number" id="number" class="mx-1">
	    	<input class="form-control" type="number" name="length" id=length placeholder="Length" value="">
			<button onclick="password($('#upper').is(':checked'), $('#lower').is(':checked'), $('#specialChar').is(':checked'), $('#number').is(':checked'), $('#length').val());" class="btn btn-success mt-2">generate</button>
			<button onclick="showPassword($('#password'), $('#secondPassword'));" class="btn btn-success mt-2">Show</button>
		</div>
	</div>
</div>

<script type="text/javascript">
	 function password(upper, lower, special, number, length) {
	let selection = {
		upper: upper,
		lower: lower,
		special: special,
		number: number
	};

	let config = {
		upper : "ABCDEFGHIJKLMNOPQRSTUVWXYZ",
		lower : "abcdefghijklmnopqrstuvwxyz",
		number : "1234567890",
		special : "!@#$%^&*()_+{}[],.?/~"
	}

	let charList = '';
	var options = ['upper', 'lower', 'special', 'number'];

	options.forEach(function(key, index){
		if(selection[key]){
			charList += config[key];
		}
	})

	let generatePassword = '';

	for(i=0;i<length;i++){
	 	var randomNum = Math.ceil(Math.random() * parseInt(charList.length))
	 	generatePassword += charList.charAt(randomNum);
	}

	console.log(generatePassword)

	$("#password").val(generatePassword);
	$('#secondPassword').val(generatePassword);

}


function showPassword(password, secondPassword) {

	if (password.attr('type') == "password") {
		password.attr('type', 'text');
		secondPassword.attr('type', 'text');
	} else {
		password.attr('type', 'password');
		secondPassword.attr('type', 'password');

	}
}
</script>