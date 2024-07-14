<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
	</script>
	<style>
		.page{
			height: 1860px;
			width:auto;
			background-color: rgba(0,92,92,0.3);
			border-style: groove;
			border-radius: 20px;
			border-color: black;

		}
		.logo{
			margin: 8px;
		}
		.header{
			width: auto;
			height: 130px;
			border-radius: 20px;
			background-color: rgb(0,92,92);
			color: white;
			margin: 5px;
			padding: 2px;
			background-repeat: no-repeat;
			
		}
		.link{
			height: 40px;
			width: auto;
			border-radius: 20px;
			margin-top: 5px;
			background-color: white;
			word-spacing: 18px;
			font-size: 28px;
		
		}
		.link a{
			color: rgba(0,92,92,0.8);
			text-decoration: none;
		
		}
		a:hover{
			color: white;
			background-color:rgb(0,92,92);
			border-radius: 20px;
			opacity: 0.5;
		}
		
		 .image{
			width: 920px;
			height: 580px;
			background-repeat: no-repeat;
			border-radius: 20px;
			margin:10px;
			padding: 5px;
			float: left;
			display: inline-block;
			background-color:white;
		}
		.img{
			border-radius: 20px;
		}
		img[data-type]{
			border-radius: 20px;
		}
		.h3{
			align-content: center;
			margin-top: 2px; 
		}
		
		.login{
			width: 310px;
			height: 330px;
			border-radius: 20px;
			float: right;
			margin-top: 10px;
			margin-right: 5px;
			padding: 4px;
			background-image: url(images/21.jpg);
			background-repeat: no-repeat;
			/*background-color:rgba(0,92,92,0.6) ;*/
			text-align: center;
			text-align-last: center;
			font-size: 20px;
			}
		.loginbtn{

			background-color: rgba(0,92,92,0.4);
			border-radius: 20px;
			font-size: 25px;
			font-family: bold;
			
		}
		.news{
			width: 1200px;
			height: 700px;
			border-radius: 20px;
			margin-top: 8px;
			padding: 10px;
			background-image: url(images/21.jpg);
			background-repeat: no-repeat;
			float: left;
			text-decoration: none;
			margin-left: 25px;
		}
		.enq{
			text-decoration: none;
			font-style: italic;
		}
		.abc{
			width: 300px;
			height: 240px;
			border-radius: 20px;
			margin-right:5px;
			float: right;
			margin-top: 10px;
			background-color: white;
			font-size: 20px;
			font-style: italic;
			}
		.pqr
			{
				height: 300px;
				width: 900px;
				padding: 10px;
				word-spacing: 8px;
			}
		#img{
				background-color: unset;
			}
	</style>
	<script type="text/javascript">
		function fun()
		{
			var nm,p;
			nm=document.form1.unm.value;
			p=document.form1.pa.value;
			if(nm==0)
			{
				alert("Please Enter name");
				document.form1.unm.focus();
				return;
			}
			else if (p=="ad12@3") 
			{
				alert("Login sucessful");
				document.form1.pa.focus();
				return;
			}
			else
			{
				alert("Login Unsucessful");
			}
		}
	</script>
</head>
<body>
	<div class="page">
	 <div class="header">
	 	<img src="images/logo.png" align="left" height="100px" width="100px" class="logo">
		<center><font size="5">Pratibha Shikshan Prasarak Mandal Januna</font><br>
						<h1><b>MADHUKARRAO PAVAR ARTS COLLEGE</b></h1>
						<font size="5">Murtijapur Dist-Akola 444 107,(MS),India</font></center>
	 </div>
	 	<div class="link">
	 		<center>
	 		<a href="web.php" target="_new"><b>Home</b></a>
	 		<a href="aboutus.php" target="_new"><b>AboutUs</b></a>
	 		<a href="courses.php" target="_new"><b>Courses</b></a>
	 		<a href="staff.php" target="_new"><b>Staff</b></a>
	 		<a href="activities.php" target="_new"><b>Activities</b></a>
	 		<a href="gallery.php" target="_new"><b>Gallery</b></a>
	 		<a href="contactus.php" target="_new"><b>ContactUs</b></a>
	 		<a href="logout.php" target="_new"><b>Logout</b></a>
	 		</center>
	 		<h3 class="h3"><marquee behavior="alternate">Welcome To Madhukarrao Pawar Arts College, Murtijapur </marquee></h3>
	 	</div><br>
	 	<div class="image">
	 		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" border-radius="20px">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/27.jpg" class="d-block w-100" alt="..." height="350px" >
    </div>
    <div class="carousel-item">
      <img src="images/28.jpg" class="d-block w-100" alt="..." height="350px">
    </div>
    <div class="carousel-item">
      <img src="images/29.jpg" class="d-block w-100" alt="..." height="350px">
    </div>
    <div class="carousel-item">
      <img src="images/30.jpg" class="d-block w-100" alt="..." height="350px">
    </div>
  	<div class="carousel-item">
      <img src="images/31.jpg" class="d-block w-100" alt="..." height="350px">
    </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="pqr">
	<br><center><h5>The college is founded and administered by Pratibha Shikshan Prasarak Mandal Januna Dist. Akola spread over Akola and Amravati District in Maharashtra. These institutions include public library, Ashram Schools, Convent, Primary schools, Middle Schools, Junior College, Senior College and Minimum Competency Vocational Courses (MCVC). All these institution are working for upliftment of rural and backward community.
<p>
The College is affiliated to the University of Amravati and it is a Co-education institution. The founder of this institution is Prin. Dr.Madhukar R. Pawar, a constructive Social worker and educationalist.</p></h5></center>
	 	</div>
	 </div>
		<div class="login">
			<center><b><h3><font size="6px" color=rgb(0,92,92)>Login</font></h3></b></center><br>
			<form name="form1" action="login.php" method="post">
				<h4><b>User_Name:</b></h4><input type="text" name="unm"><br><br>
				 <h4><b>Password:</b></h4><input type="password" name="pa"><br><br>
				<input type="submit" name="sub" value="Log in" class="loginbtn" onclick="fun()"><br>
			</form>
				<div class="abc">
					<br><img src="images/26.png" height="160px" width="160"><br><a href="enquiryhtml.php" id="img"><font color="green">
						<h5>For Enquiry Click Here</h5></font></a>
					
				</div>
		</div>
		
		<div class="news">
			<marquee behavior="alternate"><font size="6px" color=rgb(0,92,92)><b>Updates And News</b></font></marquee><br>
				<b><font size="5px">Bhatori Road,Naka No.07 Sirso,Murtizapur Dist.Akola<br>

				Application are invited from enthusiastic dedicated and qualified<br> 
				profesionals to work in the first ever....  college established by <br> Pratibha shikshak Prasarak Mandal </font></b><br>
				
				<center><font size="6px" color=rgb(150,0,100)><b>Academic Position</b></font><br></center>
				<center><b style="color:rgb(0,92,92);font-size: 25px;background-color: rgba(0,92,92,0.3);">Professor / Associate Professor/ Assistance Professor
				for 11th, 12th, B.A & B.A(voc)</b><br>

				<br><center><font size="6px" color=rgb(150,0,100)><b>Non-Academic Position</b></font></center>
				<center><b style="color:rgb(0,92,92); font-size: 25px;background-color:rgba(0,92,92,0.3);">Lab Assistance/ Librarian/ Network Administator</b><br>
				<br></center>

				<b><font size="5">The Recruitment & services condition/ qualification & exeperience<br>
				 for the above position are as per the norms of AICITE/ Government of<br>
				  Maharastra of Amaravti University.<br>
				  Interested Candid can apply with their latest Photographer <br>
				  and Resume within 7 days. from the date of advertisement to the below Email-id</font></b><br>
		 <b><font size="4">prinmpartscollege@gmail.com</font><br></b><br>
	
		 <a href="enquiryfaculty.php"><h4 class="enq"><font color="blue">job enquiry here</font></h4></a><br>
		<center><font size="6"><b><u>Vision</u></b></font></center><br>
		<font size="5" color="rgba(0,92,92,0.3)"><b>"We are commited to produce not only good students but good human beings also."</b></font><br><br>
		<center><font size="6"><b><u>Mission</u></b></font></center><br>
		<font size="5" color="rgba(0,92,92,0.3)"><b>"We strive to achieve this by imbibing a unique transparent work culture, excellent academic and physical environment ,creativity and technology transfers."</b></font>
		 <br><br><h4><font color="rgb(0,92,92)">Copyright@2020 | All rights reserved | Private Policy</h4></font>
	</div>	 

</div>
 
</body>
</html>