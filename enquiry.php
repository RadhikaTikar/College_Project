<!DOCTYPE html>
<html>
<head>
	<title>Enquiry</title>
</head>
<body>
<?php
		$con=mysql_connect("localhost","root","");
		if(!$con)
		{
			print("error=".mysql_error());
		}
		mysql_select_db("enquiry",$con);
		$n=$_REQUEST['nm'];
		$em=$_REQUEST['emi'];
		$cn=$_REQUEST['cno'];
		$scs=$_REQUEST['sc'];
		$ces=$_REQUEST['ce'];
		$dat=$_REQUEST['dt'];
		$ms=$_REQUEST['msg'];
		$count=mysql_query("insert into userdata values('$n','$em',$cn,'$scs','$ces','$dat','$ms')");
		if($count>=1)
		{
			include("web.php");
		}
		
	?>
</body>
</html>