

<!-- API Call For Verification -->
<?php

			$otp1 = false;
			if(isset($_POST['Login'])) {
				require('textlocal.class.php');
				

				$textlocal = new Textlocal(false, false, 'c/ciAEsKa/s-Irarv1FIgcYouN21Le9tg52LNrdY3o');

                $numbers = array($_POST['mobile']);

				$sender = 'TXTLCL';
				$otp = mt_rand(10000, 99999);
				$message = "Your One Time Password(OTP) To Reset Your Password Is: "  . $otp;

				try {
				    $result = $textlocal->sendSms($numbers, $message, $sender);
				    setcookie('otp', $otp);
				    // echo "OTP Successfully Send..";
				} catch (Exception $e) {
				    die('Error: ' . $e->getMessage());
				}
			}

			if(isset($_POST['otpsubmit'])) { 
				$otp = $_POST['OTP'];
				if($_COOKIE['otp'] == $otp) {
					// echo "Congratulation, Your mobile is verified.";
					header('location: index.php');
					


				} else {
					// echo "Please Enter Correct OTP.";
					$otp1 = true;
				}
			}
		?>