<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	if(isset($_SESSION['unm']))
	{
		include("web.php");
	}


?>
</body>
</html>