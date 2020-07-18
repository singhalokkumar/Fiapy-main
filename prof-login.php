<!-- Back-End Starts Here -->
<?php
$login = false;
	if(isset($_POST['email'])){
		
		// Set Connection Variables
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

		// Collect Post Variables
		$email = $_POST['email'];
		$password = $_POST['password'];

		// Excute Sql Query
		$sql = "select * from `prof-registration` . `registration`  where email = '$email' && password = '$password' ";

		$result = mysqli_query($con, $sql);

		// Check For The Matched Rows
		$num = mysqli_num_rows($result);

		// If Its True
		if($num == 1){
			// $_SESSION['Email'] = $email;
			header('location: index.php');
		}
		else {
			// echo "Email and Passwoed Doesnt match";
			$login = true;
		}
		
		$con -> close();

	}
?>
