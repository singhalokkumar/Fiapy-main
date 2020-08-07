<?php
session_start();
?>

<?php
	
	// $server = "localhost";
	// $username = "root";
	// $password = "";
	

	// // Create Connection 
	// $con = mysqli_connect($server,$username, $password);

	// // Check For Connection
	// if(!$con){
	// 	die("Connection Not Created Error in Backend Part");
	// }
	// else{
	// 	// echo "Connection Succesfully Created";
	// }
	// $first = $_SESSION['firstname'];
	// $last = $_SESSION['lastname'];
	// $phone = $_SESSION['phone'];
	// $email = $_SESSION['email'];


	// if(isset($_POST['submit'])){

	// 	$houseno = $_POST['houseno'];
	// 	$streetno = $_POST['streetno'];
	// 	$po = $_POST['po'];
	// 	$dist = $_POST['dist'];
	// 	$state = $_POST['state'];
	// 	$pin = $_POST['pin'];
	// 	$landmark = $_POST['landmark'];

	// 	$sql = " INSERT INTO `fiapy-db` . `summary` (`sno`, `houseno`, `streetno`, `po`, `dist`, `state`, `pin`, `landmark`, `firstname`, `lastname`, `phoneno`, `email`) VALUES ('NULL', '$houseno', '$streetno', '$po', '$dist', '$state', '$pin', '$landmark' ,'$first','$last','$phone','$email');
	// 	" ;
		
	// 	$result = mysqli_query($con, $sql);
	// 	// $num = mysqli_num_rows($result);

	// }
	// else {
		
	// }

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
			width: 80%;
			height: 750px;
			background: white;
			border-radius: 40px;
			padding: 50px;
			position:relative;
		}
		#delivery{
			width:500px;
			margin-right:0;
			border-right: 1px solid black;
			position:relative;
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
		#order-sum{
		}
	</style>
</head>
<body>

<div id="complete">
<div id="content" class="row">
	<div id="delivery" class="col-sm-5">
	<h2>Address:</h2><br>
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
	<div class="col-sm-5" id="order-sum">
	<h2>Order Summary:</h2>
		<div>
			<table style="width:300px">
				<tr>
					<th>Product</th>
					<th>Rate</th>
					<th>Quantity</th>
				</tr>
				<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>
				<tr>
					<td><strong>Total:</strong></td>
					<td></td>
					<td><i class="fa fa-rupee"></i>-</td>
				</tr>
			</table>
		</div>
		<div>
		<h3>Cuppon Code</h3>
		</div>
		<input type="text" name="landmark" id="landmark" class="in" maxlength="30"><br><br>
		<button class="btn btn-success">Apply Cupponcode</button>
	</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/5f35b5df4f.js" crossorigin="anonymous"></script>
</body>
</html>

