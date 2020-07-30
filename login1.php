<!-- Back-End Starts Here -->
<?php
$login = false;
session_start();
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
		// $firstname = $_POST['firstname'];

		// Excute Sql Query
		$sql = "select * from `fiapy-db` . `user-registration`  where email = '$email' && password = '$password' " ;
		
		$result = mysqli_query($con, $sql);

		// Check For The Matched Rows
		$num = mysqli_num_rows($result);

		$name = " select firstname  from  `fiapy-db` . `user-registration`  where email = '$email' && password = '$password' ";

		$result1 = mysqli_query($con, $name);

		// Check For The Matched Rows
		$num1 = mysqli_num_rows($result1);

		if($num1 == 1){
			$_SESSION['email'] = $name;
			$_SESSION['num1'] = $num1;
		}


		if($num == 1  ){
			// $_SESSION['email'] = $email;
			header('location: index1.php');
		}
		else {
			// echo "Email and Passwoed Doesnt match";
            $login = true;
            header('location: index.php');
		}
		
		$con -> close();

	}
?>
