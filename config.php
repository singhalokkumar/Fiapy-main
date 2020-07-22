 <?php

$db_user = "root";
$db_pass = "";
$db_name = "fiapy";gvchg

$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8',$db_user,$db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>


<!-- INSERT INTO `service` (`id`, `title`, `description`) VALUES ('1', 'Electrician', 'Install, maintain, and repair electrical wiring, equipment, and fixtures.'); -->