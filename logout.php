<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Logout</title>
</head>

<body>
	<?php
	session_start();  
	unset($_SESSION['sess_user']);  
	session_destroy();  
	header("location:maintenance.php");  
	?>
</body>
</html>