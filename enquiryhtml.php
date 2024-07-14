<!DOCTYPE html>
<html>
<head>
	<title>Enquiry</title>
	<style type="text/css">
		div{
			height: 540px;
			width: 1000px;
			border:solid;
			margin:20px;
			margin-left: 60px;
			padding: 40px;
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
			 		<center><b><h2>Enquiry For Students</h2></b></center>
					<form name="form1" action="enquiry.php" method="post">
						<b>Enter your Name:</b><input type="text" name="nm"><br><br>
						<b>Enter you Email_Id:</b><input type="text" name="emi"><br><br>
						<b>Enter Contact Number:</b><input type="text" name="cno"><br><br>
						<b>Select Courses:</b>
						<select class="select" name="sc">
							<option>11th</option>
							<option>12th</option>
							<option>B.A</option>
							<option>B.A(voc)</option>
						</select><br><br>
						<b>Courses Enquiry:</b><input type="text area" name="ce">
					</text area><br><br>
					<b>Date:</b><input type="date" name="dt"><br><br>
					<b>leave us a few words:</b><br><input type="'text area" name="msg">
				</text area><br><br><br>
				<input type="submit" name="sub" value="Send" class="send" onclick="fun()"></font><br><br>
				<input type="reset" name="reset" value="Reset" class="reset">
			</form>
			</div>
		
</body>
</html>