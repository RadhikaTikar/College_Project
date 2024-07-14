<!DOCTYPE html>
<html>
<head>
	<title>Enquiry</title>
	<style type="text/css">
		div{
			height: 600px;
			width: 1000px;
			border:solid;
			margin: 40px;
			padding: 40px;
			margin-left: 60px;
			text-align: center;
			background-image: url(images/22.jpg);
			background-color: rgba(0,92,92,0.3);
			border-radius: 20px;
			font-size: 20px;

	
		}
		.select{
			font-size: 20px;
		}
		.send{
			border-radius: 20px;
			background-color: rgba(0,92,92,0.3);
			font-size: 20px;
		}
		.reset{
			border-radius: 20px;
			background-color: rgba(0,92,92,0.3);
			font-size: 20px;
		}
	</style>
	<script type="text/javascript">
		function fun()
		{
			window.alert("Enquiry Sucessful");
		}
	</script>
</head>
<body>
<div class="abc">
			 		<center><b><h2>Enquiry For Job</h2></b></center>
					<form name="form3" action="faculty1.php" method="post">
						<b>Enter your Name:</b><input type="text" name="nam"><br><br>
						<b>Enter you Email_Id:</b><input type="text" name="emi"><br><br>
						<b>Enter Contact Number:</b><input type="text" name="cno"><br><br>
						<b>Qulification:</b><input type="text" name="quali"><br><br>
						<b>Experience:</b><input type="text" name="expe"><br><br>
						<b>Position_Want:</b>
						<select class="select" name="sc">
							<option>11th faculty</option>
							<option>12th faculty</option>
							<option>B.A faculty</option>
							<option>B.A(voc) faculty</option>
						</select>
						<br><br><b>Salary expected:</b><input type="text area" name="se">
					</text area><br><br>
					<b>leave us a few words:</b><br><input type="'text area" name="msg">
				</text area><br><br><br>
				
				<input type="submit" name="sub" value="Send" class="send" onclick="fun()"></font><br><br>
				<input type="reset" name="reset" value="Reset" class="reset">
			</form>
			</div>
		
</body>
</html>