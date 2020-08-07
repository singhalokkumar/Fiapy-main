<?php
session_start();
?>

<?php
	
	$server = "localhost";
	$username = "root";
	$password = "";
	

	// Create Connection 
	$con = mysqli_connect($server,$username, $password);

	// Check For Connection
	if(!$con){
		die("Connection Not Created Error in Backend Part");
	}
	else{
		// echo "Connection Succesfully Created";
	}
	$first = $_SESSION['firstname'];
	$last = $_SESSION['lastname'];
	$phone = $_SESSION['phone'];
	$email = $_SESSION['email'];


	if(isset($_POST['submit'])){

		$houseno = $_POST['houseno'];
		$streetno = $_POST['streetno'];
		$po = $_POST['po'];
		$dist = $_POST['dist'];
		$state = $_POST['state'];
		$pin = $_POST['pin'];
		$landmark = $_POST['landmark'];

		$sql = " INSERT INTO `fiapy-db` . `summary` (`sno`, `houseno`, `streetno`, `po`, `dist`, `state`, `pin`, `landmark`, `firstname`, `lastname`, `phoneno`, `email`) VALUES ('NULL', '$houseno', '$streetno', '$po', '$dist', '$state', '$pin', '$landmark' ,'$first','$last','$phone','$email');
		" ;
		
		$result = mysqli_query($con, $sql);
		// $num = mysqli_num_rows($result);

	}
	else {
		
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body,html{
			background: linear-gradient(to bottom right, #FDA55F 0%, #FF6270 100%);
			background-repeat: no-repeat;
			height: 100%;
			margin: 0px;
		}
		#complete{
			width: 100%;
			height: 100%;
			position: fixed;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		#content{
			width: 500px;
			height: 500px;
			background: white;
			border-radius: 40px;
			padding: 50px;
		}
		#delivery{
			border-right: 1px solid black;
		}
		.in{
			border: none;
			border-bottom: 1px solid black;
			width: 300px;
			height: 40px;
			background: transparent;
		}
		.lab{
			font-size: 15px;
		}
		.submit{
			height: 30px;
			width: 150px;
			font-size: 20px;
			background-color: green;
			border-radius: 10px;
			color: white;
			border: none;
			margin-left: 80px;
			margin-top: 20px;
			cursor: pointer;
		}
	</style>
</head>
<body>

<div id="complete">
<div id="content" class="row">
	<div id="delivery" class="col-sm-6">
		<form action="/Fiapy-main/summary.php" method="post">
			<label class="lab">House No.</label><br>
			<input type="text" name="houseno" id="houseno" class="in" maxlength="3"><br>
			<label class="lab">Street No.</label><br>
			<input type="text" name="streetno" id="streetno" class="in" maxlength="3"><br>
			<label class="lab">Post Office.</label><br>
			<input type="text" name="po" id="po" class="in" maxlength="20"><br>
			<label class="lab">District</label><br>
			<input type="text" name="dist" id="dist" class="in" maxlength="25"><br>
			<label class="lab">State</label><br>
			<input type="text" name="state" id="state" class="in" maxlength="20"><br>
			<label class="lab">Pin Code</label><br>
			<input type="text" name="pin" id="pin" class="in" maxlength="6"><br>
			<label class="lab">Landmark</label><br>
			<input type="text" name="landmark" id="landmark" class="in" maxlength="30"><br>
			<strong><input type="submit" name="submit" id="submit" class="submit" value="Deliver Here"></strong><br>
		</form>
	</div>
	<div class="col-sm-6" id="order-sum">
		
	</div>
</div>
</div>


</body>
</html>

