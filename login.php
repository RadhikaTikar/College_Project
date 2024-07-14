<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
		$con=mysql_connect("localhost","root","");
		if(!$con)
		{
			print("error=".mysql_error());
		}
		mysql_select_db("login",$con);
		$un=$_REQUEST['unm'];
		$pass=$_REQUEST['pa'];
		$rs=mysql_query("select * from logindata where User_Name='$un' and Password='$pass'");
		$_SESSION['unm']=$un;
		if(mysql_num_rows($rs)>=1)
		{
			include("enquiry1.php");
		}
		else
		{
			include("web.php");
		}
	
?>

</body>
</html>