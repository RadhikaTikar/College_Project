
<!DOCTYPE html>
<html>
<head>
	<title>Enquiry Data</title>
	<style type="text/css">
		div
		{
			border:solid;
			height: 600px;
			width: auto;
			padding: 50px;
			margin: 70px;
			word-spacing: 8px;
			text-align: justify;
			background-repeat: no-repeat;
			background-color: rgba(0,92,92,0.3);
			background-image: url(images/22.jpg);
			border-radius: 20px;

		}
	</style>
</head>
<body>
	<div>
<center> <b> <font size="6px" color="rgb(150,92,39)">User Data</font></b><br><br>
<table  border="1" width="100%" cellpadding="5" cellspacing="5">
	<?php
		$con=mysql_connect("localhost","root","");
		if(!$con)
		{
			print("error=".mysql_error());
		}
		mysql_select_db("enquiry",$con);

		$rs=mysql_query("select * from userdata");
		?>
		<tr align="center" bgcolor="grey">
			<td><b>Name</b></td>
			<td><b>Email-Id</b></td>
			<td><b>Contact_No</b></td>
			<td><b>Cources</b></td>
			<td><b>Enquiry</b></td>
			<td><b>Date</b></td>
			<td><b>Message</b></td>
		</tr>
		<?php
			while($row=mysql_fetch_array($rs))  
			{
		?>
		<tr align="center">
			
			<td><?php print($row['Name']);?></td>
			
			<td><?php print($row['Email_Id']);?></td>
			
			<td><?php print($row['Contact_Number']);?></td>
		
			<td><?php print($row['Courses']);?></td>
			
			<td><?php print($row['Enquiry']);?></td>

			<td><?php print($row['Date']);?></td>

			<td><?php print($row['Message']);?></td>
		</tr>
		<?php
			}
			mysql_close($con);
		?>

</table>
</center>
</div>
<div>
<form name="form2">
	<center> <b> <font size="6px" color="rgb(150,92,39)">Faculty Data</font></b><br><br>

	<center>
<table  border="1" width="100%" cellpadding="5" cellspacing="5">
	<?php
		$con=mysql_connect("localhost","root","");
		if(!$con)
		{
			print("error=".mysql_error());
		}
		mysql_select_db("enquiry",$con);

		$rs=mysql_query("select * from faculty");
		?>
		<tr align="center" bgcolor="grey">
			<td><b>Name</b></td>
			<td><b>Email-Id</b></td>
			<td><b>Contact_No</b></td>
			<td><b>Qualifacation</b></td>
			<td><b>Exprience</b></td>
			<td><b>Position Want</b></td>
			<td><b>Salary Expected</b></td>
			<td><b>Message</b></td>
		</tr>
		<?php
			while($row=mysql_fetch_array($rs))  
			{
		?>
		<tr align="center">
			
			<td><?php print($row['Name']);?></td>
			
			<td><?php print($row['Email_Id']);?></td>
			
			<td><?php print($row['Contact_No']);?></td>
		
			<td><?php print($row['Qualification']);?></td>
			
			<td><?php print($row['Experience']);?></td>

			<td><?php print($row['Position_Want']);?></td>

			<td><?php print($row['Salary_Expected']);?></td>

			<td><?php print($row['Message']);?></td>
		</tr>
		<?php
			}
			mysql_close($con);
		?>

</table>
</center>
</form>
</body>
</html>