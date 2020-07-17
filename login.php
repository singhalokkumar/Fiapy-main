<?php

require_once('config.php');


echo "hiiiiii";



$sql = "SELECT * from users";
$stmtinsert = $db->prepare($sql);
$result = $stmtinsert->execute([]);
if($result){
	echo 'Your message has been submitted';
}
else{
	echo'Error please try again later;';
}
?>