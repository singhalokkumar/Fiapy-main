<?php

    if(isset($_POST['btn'])){

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


    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if($password != $confirmPassword){
        die( "Password didn't match");
    }
   


    $sql = " UPDATE `fiapy_db` . `user-registration` SET `password` = '$confirmPassword' WHERE `user-registration` . `email` = '$email' ;  ";

    $result = mysqli_query($con, $sql);


    if ($result) { 
            header("Location: index.php");  
    } 
            
    
    
    

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
<form action="/Fiapy-main/update-password.php" method="post">
        <input type="email" name="email" value="" placeholder="Email">
        <br>
        <br>
        <input type="text" name="password" value="" placeholder="Password">
        <br>
        <br>
        <input type="text" name="confirmPassword" value="" placeholder="Confirm Password">
        <br>
        <br>
        <button type="submit" name="btn">Update Password</button>
    </div>
</form>
</body>
</html>