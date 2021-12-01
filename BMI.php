<?php 

if(!isset($_SESSION["role"])) {
	header("Location: ./index.php?content=home");
}

?>

<div class="row"> 
	<div class="col-md-8">
		<form style="max-width: 700px;" class="mx-auto" method="POST">
			<div class="form-group">
	    		<label for="exampleInputEmail1">Height in cm:</label>
	    		<input type="number" class="form-control" placeholder="Enter height" name="height" required="" autofocus="">
	  		</div>
	  		<div class="form-group">
	    		<label for="exampleInputPassword1">Weight in kg:</label>
	    		<input type="number" class="form-control" placeholder="Enter weight" name="weight" required="">
	  		</div>
	  		<div class="form-group">
	    		<label for="exampleInputPassword1">Age in years:</label>
	    		<input type="number" class="form-control" placeholder="Enter age" name="age" required="">
	  		</div>
	  		<div class="form-group">
	    		<label for="exampleInputPassword1">Gender:</label>
	    		<select class="form-control" required="" name="gender">
	    			<option>male</option>
	    			<option>female</option>
	    		</select>
	  		</div>
		
	  		<div class="form-group">
	  			<div class="row">
	  				<div class="col-sm-12 mx-auto" style="max-width: 300px;">
	  					<input type="submit" name="submit" tabindex="4" class="form-control btn btn-login" value="Calculate">
	  				</div>
	  			</div>
			</div>
			<div class="form-group">
	   			<label for="exampleInputPassword1">Result:</label>
	   			<input type="text" class="form-control result" value="" disabled="">
			</div>
		</form>
	</div>
	<?php  
	include("./db/db.php");
	include("./db/bmi.php");

	if(isset($_POST["submit"])) {
		$test = new BMI($_POST["height"], $_POST["weight"], $_POST["age"], $_POST["gender"]);
		$test->returnData();

		$insert = new db();
		$insert->query('INSERT INTO calculated (height, weight, age, gender, user_id,  bmi_waarden) VALUES (?, ?, ?, ?, ?, ?)', $test->height * 100, $test->weight, $test->age, $test->gender, $_SESSION["id"], $test->bmi);
	}

	$databse = new db();
	$data = $databse->query('SELECT * FROM calculated where user_id = ?', $_SESSION['id'])->fetchAll();
?>
	<div class="col-md-4 results" style="max-height: 55vh; overflow: scroll;">
		<h1>vorige meetingen:</h1>
		<table style="width: 100%;" border="1">
			<tbody>
              <tr>
                <td style="color: white;"><b>height</b></td>
                <td style="color: white;"><b>weight</b></td>
                <td style="color: white;"><b>age</b></td>
                <td style="color: white;"><b>gender</b></td>
                <td style="color: white;"><b>bmi</b></td>
              </tr>
              <?php foreach($data as $row): ?>
              	<?php if($row['user_id'] == $_SESSION["id"]): ?>

              	<tr>
                	<td><?=$row['height']?></td>
                	<td><?=$row['weight']?></td>
                	<td><?=$row['age']?></td>
                	<td><?=$row['gender']?></td>
                	<td><?=$row['bmi_waarden']?></td>
              	</tr>
              <?php endif ?>
              <?php endforeach ?>
            </tbody>
		</table>


	</div>
</div>



