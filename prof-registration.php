
<!-- Backend Starts Here -->
<?php
$insert = false;
$registered = false;

if(isset($_POST['firstname'])){

	// Set Conncetion variables
	$server = "localhost";
	$username = "root";
	$password = "";

	// Create Connection 
	$con = mysqli_connect($server,$username,$password);

	// Check For The Conncection
	if(!$con){
		die("Connection is not created ". mysqli_connect_error());
	}
	// else {
	// 	echo "Connection Created Succesfully";
	// }

	// Collect Post Variables
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$phoneno = $_POST['phoneno'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql;
	
	// Checking For Already Registered User
	$s = "select * from `fiapy-db` . `prof-registration`  where email = '$email' && phone = '$phoneno'  ";

	$result = mysqli_query($con, $s);

	// Check For The Matched Rows
	$num = mysqli_num_rows($result);


	if($num){
		$registered = true;
	}

	// Excute The Sql Query
	else{
	$sql = "INSERT INTO `fiapy-db` . `prof-registration` ( `firstname`, `lastname`, `phone`, `email`, `password`) VALUES ( '$firstname', '$lastname', '$phoneno', '$email', '$password');";

    $insert = true;
	
    }
    
    if($insert){
        header('location: index.php');
    }

	// echo $sql;
	if($con -> query($sql) == true){
		
	}
	else{
		// echo "Error Occured At Time Of Insertion";
	}

    // Close The Connection
	$con -> close();
}

?>