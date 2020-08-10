<?php
	session_start();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Fiapy</title>
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Fiapy-main/css/indexstyle.css">
  <!-- <link rel="stylesheet" href="css\indexstyle.css"> -->
</head>
<body>
<section id="first">
	<div class="container" id="head1">
		<nav class="navbar navbar-light bg-light" id="nav">
		<a class="navbar-brand" href="#" style="color: white !important;">
    			<img src="Fiapy-main/images/logo.png" width="100px" height="100px" class="d-inline-block align-top" alt="">
    		 </a>
  			<div class="container3">
				<div class="btn-group ">
					<button type="button" class="btn btn-primary-outline" style="color: white !important;" onclick="openproflogin()"><i class="fas fa-hammer"></i>  Register as Professional</button>
					<button type="button" class="btn btn-primary-outline" style="color: white !important;" onclick="openlogin()"><i class="far fa-user"></i> 

					<?php
					
					$result = false;
					$login = false;
							// if($_SESSION['num1']){
							// 	echo "Welcome ". '<strong>' . $_SESSION['email'] . '</strong>';
							// }
							// else {
							// 	echo "Login";
							// }
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
                            

							// $username = "Login";
							if(isset($_POST['Login'])){

								$email = $_POST['email'];
								$password = $_POST['password'];
								
								// Excute Sql Query
								$sql = "select * from `fiapy_db` . `user-registration`  where email = '$email' && password = '$password' " ;
								
								$user = mysqli_query($con, $sql);
								$num = mysqli_num_rows($user);
								if($num){
									$login = true;
								}

								if (mysqli_num_rows($user) > 0) {
									while ($row = mysqli_fetch_array($user)) {
										  $username = $row['firstname'];
										  $_SESSION["firstname"] = $row['firstname'];
										  $_SESSION['lastname'] = $row['lastname'];
										  $_SESSION['phone'] = $row['phone'];
										  $_SESSION['email'] = $row['email'];
										  $result = true;
									}
								 } else {
										   $msg = "Can't Log in";
										   header('location: index.php');
										  
								 }
								 
							   }
							   else {
								   echo"Login";
							   }

							   if($result){
								echo "Welcome ". $username;
								?>
								<button type="button" class="btn btn-primary-outline" style="color: white !important;" ><i class="fa fa-sign-out"></i>
				<a style="color: white !important; text-decoration: none;" href="/Fiapy-main/logout.php">Logout</a>
				</button>
				<?php
							   }
					?>
				</button>
				
				
				
				</div>
			</div>
		</nav>
	</div>
<!--           Service Block                 -->
<div id="services">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<a [routerLink]="['/services/electrician']">
							<div class="cards" id="cards">
								<img src="Fiapy-main/images/services/electrician.png" class="card-img-top" id="service-img">
								<p id="card-text">Electrician</p>
							</div>
						</a>
						<a [routerLink]="['/services/grooming']">
							<div class="cards" id="cards">
								<img src="Fiapy-main/images/services/Grooming.png" class="card-img-top" id="service-img">
								<p id="card-text">Grooming</p>
							</div>
						</a>
							<a [routerLink]="['/services/laundry']">
							<div class="cards" id="cards">
								<img src="Fiapy-main/images/services/laundry.png" class="card-img-top" id="service-img">
								<p id="card-text">Laundry</p>
							</div>
						</a>
					</div>
				</div>
				<!-- <div class="col-sm-6">
					<div class="row">
						<a [routerLink]="['/services/mechanic']">
							<div class="cards" id="cards">
								<img src="Fiapy-main/images/Mechanic.png" class="card-img-top" id="service-img">
								<p id="card-text">Mechanic</p>
							</div>
						</a>
						<a [routerLink]="['/services/haircut']">
							<div class="cards" id="cards">
								<img src="Fiapy-main/images/Salon.png" class="card-img-top" id="service-img">
								<p id="card-text">Haircut/Saloon</p>
							</div>
						</a>
						<div>
							<div class="cards" id="cards">
								<img src="#" class="card-img-top" id="service-img">
								<p id="card-text"><strong>Service 6</strong></p>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</section>


<div id="servcurvbg">
	<div id="servcurv"></div>
	<div id="servbtm"></div>
</div>

<div style="position: static;">
<!--      Second Section     -->

<section id="second">
<div class="container">
	<H2 style="padding-top: 20px;">Offers comming soon</H2>
	<button class="btn btn-outline-danger" style="float: right; background: white !important;">Book Now</button>
</div>
</section>




<!--       Third section     -->

<section id="carousel-1">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    	<div class="container" >
    		<div class="row" id="carousel-inner-1">
    			<div class="card" id="card-imgs">
  				<img src="Fiapy-main/images/slider/electrician.jpg" class="card-img-top" alt="...">
			</div>
			<div class="card" id="card-imgs">
  				<img src="Fiapy-main/images/slider/plumbing.jpg" class="card-img-top" alt="...">
			</div>
			<div class="card" id="card-imgs">
  				<img src="Fiapy-main/images/slider/laundry.jpg" class="card-img-top" alt="...">
			</div>
    	</div>
  	</div>
    </div>
    <div class="carousel-item">
      <div class="container" >
    		<div class="row" id="carousel-inner-1">
    			<div class="card" id="card-imgs">
  				<img src="Fiapy-main/images/slider/artisan.jpg" class="card-img-top" alt="...">
			</div>
			<div class="card" id="card-imgs">
  				<img src="Fiapy-main/images/slider/sanitization.jpg" class="card-img-top" alt="...">
			</div>
			<div class="card" id="card-imgs">
  				<img src="Fiapy-main/images/slider/barber.jpg" class="card-img-top" alt="...">
			</div>
    	</div>
  	</div>
    </div>
    <div class="carousel-item">
     <div class="container" >
    		<div class="row" id="carousel-inner-1">
    			<div class="card" id="card-imgs">
  				<img src="Fiapy-main/images/slider/cleaning.jpg" class="card-img-top" alt="...">
			</div>
			<div class="card" id="card-imgs">
  				<img src="Fiapy-main/images/slider/plumbing.jpg" class="card-img-top" alt="...">
			</div>
			<div class="card" id="card-imgs">
  				<img src="Fiapy-main/images/slider/working.jpg" class="card-img-top" alt="...">
			</div>
    	</div>
  	</div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>

<!--    Fourth Section       -->

<section>
	<div id="key">
		<h1>Key Features of Services</h1>
	</div>
</section>

<!--    fifth Section       -->

<!-- <section id="carousel">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    	<div class="container" style="text-align: center;" >
    	<h2>Testimonial</h2>
    	<h3>What coustomers are saying about us</h3>
    	<div class="row" style="margin-top: 50px; margin: 8%;">
    	<div >
      <div class="card text-center p-3" style="width: 300px;height: 200px;color: black; margin-top: 10px">
    <blockquote class="blockquote mb-0">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
      <footer class="blockquote-footer">
        <small>
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  </div>
  <div>
      <div class="card text-center p-3" style="width: 300px; height: 230px; color: black;">
    <blockquote class="blockquote mb-0">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
      <footer class="blockquote-footer">
        <small>
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
</div>
  <div >
      <div class="card text-center p-3" style="width: 300px;height: 200px;color: black; margin-top: 10px">
    <blockquote class="blockquote mb-0">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
      <footer class="blockquote-footer">
        <small>
          Someone famous in <cite title="Source Title">Source Title</cite>
        </small>
      </footer>
    </blockquote>
  </div>
</div>
  </div>
    </div>
</div>
    <div class="carousel-item">
      <img src="Fiapy-main/images/#" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Fiapy-main/images/#" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section> -->

<!--    sixth Section       -->

<section>
	<div id="Availability">
		<h1>Availability of services in city</h1>
	</div>
</section>

<!--    Seventh Section       -->

<section>
	
	<div class="container">
		<div class="row">
		<div id="phone-service" class="col-sm-5">
			<h2>Get services from your phone</h2>
			<p>Enter Your Mobile Number</p>
			<div class="input-group mb-3" style="width: 300px;">
  				<input type="text" class="form-control" placeholder="Mobile Number" aria-describedby="button-addon2">
  				<div class="input-group-append">
    					<button type="button" id="button-addon2" style="background: grey;border:none;border-radius: 5px; color: white;padding-left: 10px;padding-right: 10px;">Button</button>
  				</div>
			</div>
			<a href="#">
			<img src="Fiapy-main/images/googleplay.png" id="download-icon1">
			</a>
			<a href="#">
			<img src="Fiapy-main/images/appstore.png" id="download-icon">
			</a>
		</div>
		<div class="col-sm-5">
			<img src="Fiapy-main/images/mobile.jpg" style="height:500px;padding:20px;">
		</div>
	</div>
</div>
</section>


<!--    Footer Section       -->
<!-- <div style="height:100px;background: linear-gradient(to right, #33ccff 0%, #5E79A8 65%); border-radius:50% 50% 0% 0%; text-align:center;color:white;padding-top:70px;">
</div> -->
<section id="footer">
	<footer>
		<div class="container">
	    <h2>Explore More</h2>
		<div  class="row" id="footer-link">
			    	<div class="col-lg-3">
					<a href="">
						<li>
							About Us
						</li>
					</a>
					<a href="">
						<li>
							Terms/Condition
						</li>
					</a>
						<a href="">
						<li>
							Privacy policy
						</li>
					</a>
				</div>
				<div class = "col-lg-3">
				    <h5> </h5>
				    <a href="">
						<li>
							Team/Career
						</li>
					</a>
				    <a href="">
						<li>
							Blog
						</li>
					</a>
					<a href="">
						<li>
							Support
						</li>
					</a>
				</div>
				<div class="col-lg-3">
					<h4>Contact us</h4>
					<li>
						+91-7461891999
					</li>
					<li>
						contact@fiapy.com
					</li>
				</div>
			
			<div class="col-lg-3">
					<h5>Keep In Touch</h5>
					<div class="icon">
						<i class="fab fa-instagram" style="height:20px;width:20px;"></i>
						<i class="fab fa-facebook-f" style="height:20px;width:20px;"></i>
						<i class="fab fa-twitter" style="height:20px;width:20px;"></i>
					</div>
						<li style="float:left;"><i class="far fa-copyright"></i>2020 Fiapy Multiservices Pvt.Ltd.</li>
						<li>All Rights Reserved.</li>
				</div>
			</div>
		</div>
	</footer>
</section>

</div>
<!------------------------coustomer-login------------------------------------------------>

<div style="position: absolute;display: none;" id="login">
	<form action="\Fiapy-main\index.php" method="post">
		<div id="back">
			<div  id="box" class="center">
				<button id="btn-close" onclick="closelogin()"><i class="fa fa-times" aria-hidden="true"></i></button>
				<h1>Login</h1>
				<input type="Email" name="email" placeholder="Email" id="ep">
				<input type="password" name="password" placeholder="password" id="ep"><br>
				<input type="Submit" class="btn btn-success" name="Login" value='Login' ><br><br>
				<a onclick="openregistration()"><strong>New User?</strong></a><br>
				<a onclick="openfrgt()"><strong>forgot password?</strong></a>
			</div>
		</div>
		</form>
</div>

                
<div>
<a href="logout.php">Log Out</a>
</div>


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
	$s = "select * from `fiapy_db` . `user-registration`  where email = '$email' && phone = '$phoneno'  ";

	$result = mysqli_query($con, $s);

	// Check For The Matched Rows
	$num = mysqli_num_rows($result);


	if($num){
		$registered = true;
	}

	// Excute The Sql Query
	else{
	$sql = "INSERT INTO `fiapy_db` . `user-registration` ( `firstname`, `lastname`, `phone`, `email`, `password`) VALUES ( '$firstname', '$lastname', '$phoneno', '$email', '$password');";

    $insert = true;
	
    }
    
    if($insert){
		// header('location: index.php');
		
		
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

<div style="position: absolute; display: none;" id="registeration">

	<form action="\Fiapy-main\index.php" method="post">
		<div id="back">
			<div  id="box" class="center">
				<button id="btn-close" onclick="closeregistration()"><i class="fa fa-times" aria-hidden="true"></i></button>
				<h1>Create</h1>
				<div id="register">
					<input type="text" name="firstname" placeholder="First Name" id="ep" required="">
					<input type="text" name="lastname" placeholder="Last Name" id="ep" required="">
					<input type="text" name="phoneno" placeholder="Phone No." id="ep" required="">
					<input type="Email" name="email" placeholder="Email" id="ep" required="">
					<input type="password" name="password" placeholder="password" id="ep" required=""><br>
					<input onclick="popUp()" type="Submit" class="btn btn-success" name="create" value="Create Account"><br><br>
				</div>
				<!--            OTP Section               -->
				<div id="otp">
					<p><strong>An OTP has been sent to your mobile no.</strong></p>
					<input type="password" name="OTP" placeholder="OTP" id="ep"><br>
					<button class="btn btn-success" name="otpsubmit" id="btn-submit">Submit</button><br><br>
				</div>
				<a onclick="openlogin()"><strong>Already Registered?</strong></a>
			</div>
		</div>
	</form>
</div>


<div style="position: absolute;display: none;" id="frgt">
	<div id="back">
		<div  id="box" class="wrapper">
			<button id="btn-close" onclick="closefrgt()"><i class="fa fa-times" aria-hidden="true"></i></button>

			
			<!-- End API Call -->
			<h1>Forgot Password</h1>
			<form  method="post" id="myForm">
			<div id="forgot" class="first_box">
				<p><strong>Enter Your Registered Mobile No.</strong></p>
				<!-- <input type="Email" name="Email" placeholder="Email" id="ep"> -->
				<input type="text" name="mobile" placeholder="Enter Valid Mobile No." id="ep" maxlength="10">
				<br>
				<!-- <button class="btn btn-success" id="forgot" name="Login" onclick="openfrgtotp()" >Send Code</button><br><br> -->
				<button  class="btn btn-success" id="forgot" name="Login" onclick="send_otp()" >Send Code</button><br><br>
				<a onclick="openlogin()"><strong>Return to Login</strong></a>
			</div>
		</form>
		<form action="/Fiapy-main/index.php" method="post">
			<div id="frgt-otp" class="second_box">
				<p><strong>An OTP has been sent to your mobile no.</strong></p>
				<input type="password" name="OTP" placeholder="OTP" id="ep"><br>
				<button class="btn btn-success" name="otpsubmit">Submit</button><br><br>
			</div>
		</form>
		</div>
	</div>
</div>


<!---------------professional-login--------------------->


<div style="position: absolute;display: none;" id="prof-login">
<form action="\Fiapy-main\prof-login.php" method="post">
	<div id="back">
		<div  id="box" class="center">
			<button id="btn-close" onclick="closeproflogin()"><i class="fa fa-times" aria-hidden="true"></i></button>
			<h1>Login</h1>
			<input type="Email" name="email" placeholder="Email" id="ep">
			<input type="password" name="password" placeholder="password" id="ep"><br>
			<button class="btn btn-success" name="Login">Login</button><br><br>
			<a onclick="openprofregistration()"><strong>New User?</strong></a><br>
			<a onclick="openproffrgt()"><strong>forgot password?</strong></a>
		</div>
	</div>
</form>
</div>


<div style="position: absolute; display: none;" id="prof-registeration">
<form action="\Fiapy-main\prof-registration.php" method="post">
	<div id="back">
		<div  id="box" class="center">
			<button id="btn-close" onclick="closeprofregistration()"><i class="fa fa-times" aria-hidden="true"></i></button>
			<h1>Create</h1>
			<div id="prof-register">
				<input type="text" name="firstname" placeholder="First Name" id="ep">
				<input type="text" name="lastname" placeholder="Last Name" id="ep">
				<input type="text" name="phoneno" placeholder="Phone No." id="ep">
				<input type="Email" name="email" placeholder="Email" id="ep">
				<input type="password" name="password" placeholder="password" id="ep"><br>
				<button class="btn btn-success" name="Login" onclick="openprofrgsotp()">Create Account</button><br><br>
			</div>
			<!--            OTP Section               -->
			<div id="prof-otp">
				<p><strong>An OTP has been sent to your mobile no.</strong></p>
				<input type="password" name="OTP" placeholder="OTP" id="ep"><br>
				<button class="btn btn-success" name="otpsubmit" id="btn-submit">Submit</button><br><br>
			</div>
			<a onclick="openproflogin()"><strong>Already Registered?</strong></a>
		</div>
	</div>
</form>
</div>

<div style="position: absolute;display: none;" id="prof-frgt">
	<div id="back">

		<div  id="box" class="wrapper">
			<button id="btn-close" onclick="closeproffrgt()"><i class="fa fa-times" aria-hidden="true"></i></button>
			<h1>Forgot Password</h1>

			<!-- <form action="/Fiapy-main/verifyOtp.php" method="post"> -->
			<div id="prof-forgot">
				<p><strong>Enter Your Registered Mobile No.</strong></p>
				<!-- <input type="Email" name="Email" placeholder="Email" id="ep"><br> -->
				<input type="text" name="mobile" placeholder="Enter Valid Mobile No." id="ep" maxlength="10">
				<br>
				<button class="btn btn-success" name="Login" onclick="openproffrgtotp()">Send Code</button><br><br>
				<a onclick="openproflogin()"><strong>Return to Login</strong></a>
			</div>
		<!-- </form> -->

		<!-- <form action="/Fiapy-main/verifyOtp.php" method="post"> -->
			<div id="prof-frgt-otp">
				<p><strong>An OTP has been sent to your mobile no.</strong></p>
				<input type="password" name="OTP" placeholder="OTP" id="ep"><br>
				<button class="btn btn-success" name="otpsubmit">Submit</button><br><br>
			</div>
		<!-- </form> -->
		

		</div>
	</div>
</div>

<script>//////////////////////////professional/////////////////////////////
	///////////////login section////////////////////
function openproflogin() {
  document.getElementById("prof-login").style.display = "block";
  document.getElementById("prof-frgt").style.display = "none";
  document.getElementById("prof-registeration").style.display = "none";
}

function closeproflogin() {
  document.getElementById("prof-login").style.display = "none";
}


///////////////////////registration section////////////////
function openprofregistration() {
  document.getElementById("prof-registeration").style.display = "block";
  document.getElementById("prof-login").style.display = "none";
}

function closeprofregistration() {
  document.getElementById("prof-registeration").style.display = "none";
}


///////////////////////////forgot pass region///////////////////////////
function openproffrgt() {
  document.getElementById("prof-frgt").style.display = "block";
  document.getElementById("prof-login").style.display = "none";
}
function closeproffrgt() {
  document.getElementById("prof-frgt").style.display = "none";
}

/////////////////otp section////////////


function openprofrgsotp() {
  document.getElementById("prof-otp").style.display = "block";
  document.getElementById("prof-register").style.display = "none";
}

function openproffrgtotp() {
  document.getElementById("prof-frgt-otp").style.display = "block";
  document.getElementById("prof-forgot").style.display = "none";
}
</script>


<script>//////////////////////////costumer/////////////////////////////
	///////////////login section////////////////////
function openlogin() {
  document.getElementById("login").style.display = "block";
  document.getElementById("frgt").style.display = "none";
  document.getElementById("registeration").style.display = "none";
}

function closelogin() {
  document.getElementById("login").style.display = "none";
}


///////////////////////registration section////////////////
function openregistration() {
  document.getElementById("registeration").style.display = "block";
  document.getElementById("login").style.display = "none";
}

function closeregistration() {
  document.getElementById("registeration").style.display = "none";
}


///////////////////////////forgot pass region///////////////////////////
function openfrgt() {
  document.getElementById("frgt").style.display = "block";
  document.getElementById("login").style.display = "none";
}
function closefrgt() {
  document.getElementById("frgt").style.display = "none";
}

/////////////////otp section////////////


function openrgsotp() {
  document.getElementById("otp").style.display = "block";
  document.getElementById("register").style.display = "none";
}

function openfrgtotp() {
  document.getElementById("frgt-otp").style.display = "block";
  document.getElementById("forgot").style.display = "none";
  


}




</script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

  

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/5f35b5df4f.js" crossorigin="anonymous"></script>

<script>
	function push(){
	<?php
	$conn = mysqli_connect("localhost", "root", "");
		$sql = " INSERT INTO `fiapy_db` . `ordersummary` (`order_id`, `user_id`, `total`, `customer_name`, `cart_id`, `location`) VALUES (NULL, '', '', '', '', ".
		$row['locality'] . $row['city'].
                $row['state'].
                $row['country'].
                    $row['pin'].
		
		"); ";

		$result = mysqli_query($con, $sql);

		$row = mysqli_num_rows($result);
		echo $row;

	?>
}
</script>
</script>
<script src="/fiapy-main/sweetalert.min.js"></script>
<script>

function pop(){
	swal({
		title: "Good job!",
		text: "Succesfully Registered!",
		timer: 19000,
		icon: "success",
		});
}


function popUp(){
	setTimeout(pop(), 5000);
		
}

</script>
<script type="text/javascript">
    function send_otp(){
	var mobile=jQuery('#mobile').val();
	jQuery.ajax({
		url:'verifyOtp.php',
		type:'post',
		data:'mobile='+mobile,
		success:function(result){
			
				// jQuery('.second_box').show();
				// jQuery('.first_box').hide();
				openfrgtotp();
			
		}
	});
}
	
</script>


</body>
</html>
