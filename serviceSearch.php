<?php

?>

<html>
<title> Search-Engine</title>
<head>

</head>
<style>

input{
	border: 2px solid #3a6ae5;
	border-radius: 6px;
	margin: 4px 4px;
	padding: 5px 5px;
	outline: none;
	color: black;
	/* background-color: #77a4ef; */
}

#submit{
	border: 2px solid #3a6ae5;
	border-radius: 6px;
	margin: 4px 4px;
	padding: 5px 5px;
	outline: none;
	color: black;
	background-color: #77a4ef;
}
a {
		text-decoration: none;
		font-size: 24px;

	}

	h4 {
		margin: 8px 0px;
	}

</style>
<body>
<form action="serviceSearch.php" method="POST">
<center><h3>Search Database</h3></center>
<center><table>
<tr>
	<td>Search</td>
	<td><input  type="text" name="name" size="100" placeholder="Search In Database!"></td>
	<td><input id="submit" type="submit" name="submit"></td>
</tr>

</table>
<?php
$conn = mysqli_connect("localhost", "root", "");


if(isset($_REQUEST['submit'])){
$name = $_POST['name'];

	if(empty($name)){
	
}
	else{
			$make = '<h4>No match found!</h4>';

			$sele = "SELECT * FROM `fiapy-db` . `service` WHERE title LIKE '%$name%' or description like '%$name%'  ";

			$result = mysqli_query($conn,$sele);
	
			if($row = mysqli_num_rows($result) > 0){

				while($row = mysqli_fetch_assoc($result)){
				echo '<h4><a href="#" >'.$row['title'];  echo '</a></h4>';
				echo ' '.$row['description'];
				// echo '<p>'.$row['description'] .'</p>'
		
			}
}
else{
		echo'<h2> Search Result</h2>';
		print ($make);
}
	mysqli_free_result($result);
	mysqli_close($conn);
}
}

?>
</center>

</form>
</body>

</html>