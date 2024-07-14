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
		mysql_select_db("enquiry",$con);
			$n=$_REQUEST['nam'];
			$em=$_REQUEST['emi'];
			$con=$_REQUEST['cno'];
			$qua=$_REQUEST['quali'];
			$exp=$_REQUEST['expe'];
			$pw=$_REQUEST['sc'];
			$sal=$_REQUEST['se'];
			$mess=$_REQUEST['msg'];
		$count=mysql_query("insert into faculty values('$n','$em',$con,'$qua','$exp','$pw','$sal','$mess')");
		if($count>=1)
		{
			include("web.php");
		}
		
	?>

</body>
</html>