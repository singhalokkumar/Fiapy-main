<?php

    if($_POST['q'] != ''){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";


    // Create Connection 
    $con = mysqli_connect($server, $username, $password);

    // Select Database
    $db = mysqli_select_db($con ,'fiapy-db');

    // Check For connection
    if(!$con){
		die("Connection is not created ". mysqli_connect_error());
	}
	else {
		// echo "Connection Created Succesfully";
    }
    
    // Check for products


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
    <style>

        h3{
            margin: 20px 0px 0px 0px;
            padding: 0px;

        }
        p{
            margin: 0;
            padding: 0;
        }
        input{
            padding: 12px 12px;
            /* margin: 4px 4px; */
            border: 2px solid red;
            border-radius: 12px;
            outline: none;
        }
        button{
            padding: 12px 12px;
            /* margin: 4px 4px; */
            border: 2px solid red;
            border-radius: 12px;
            outline: none;
            cursor: pointer;
            background-color: brown;
            color: white;
        }

    </style>
</head>

<body>
   
        <h1>This is a Search bar</h1>
        <form action="\Fiapy-main\service1.php" method="post">
            <input type="text" id="searchBar" name="q" placeholder="Search Here!">
            <button type="submit">GO!</button>
        </form>
        
    <?php

            // if(!isset($q)){
            //     echo "";
            // }
            // else {
                
         
              $query = mysqli_query($con, " SELECT * FROM `fiapy-db` . `service` WHERE title LIKE '%$q%' or description like '%$q%' ");

              if (!$query || mysqli_num_rows($query) == 0){
               echo "fasle";
              }
             
              $num_rows = mysqli_num_rows($query);

              ?>
                <p> <strong> <?php echo $num_rows ; ?>
            </strong> results for '<?php echo $q; ?>'</p>
              <?php
          
             
              while( $row = mysqli_fetch_array($query)) {
                  $id = $row['id'];
                  $title = $row['title'];
                  $desc = $row['description'];
          
                  echo '<h3> ' . $title . '</h3><p> ' . $desc . '</p><br/>';
              }
            // }
          
            ?>
</body>

</html>

<?php
    }
?>