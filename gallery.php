<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
	<style type="text/css">
		div{
			height: 600px;
			width: 1000px;
			border:solid;
			margin: 60px;
			padding: 30px;
			text-align: justify;
			background-image: url(images/22.jpg);
			background-color: rgba(0,92,92,0.3);
			border-radius: 20px;
		}
		img[data-type]{
			border:solid 3px;
			border-color:rgb(0,92,255);
			border-radius: 20px;
			height: 200px;
			width: 250px;
			margin: 20px;
			padding: 10px;
		}
		a:hover{
			opacity: 0.5;
		}
	</style>
</head>
<body>
	<div>
		<font size="6px" color=rgb(150,92,39);><center><b>Gallery</b></center></font>
	<a href="images/12.jpg"><img src="images/12.jpg" data-type="mytype" target="_new"></a>
	<a href="images/13.jpg"><img src="images/13.jpg" data-type="mytype"target="_new"></a>
	<a href="images/16.jpg"><img src="images/16.jpg" data-type="mytype"target="_new"></a><br>
	<a href="images/15.jpg"><img src="images/15.jpg" data-type="mytype" target="_new"></a>
	<a href="images/17.jpg"><img src="images/17.jpg" data-type="mytype" target="_new"></a>
	<a href="images/14.jpg"><img src="images/14.jpg" data-type="mytype" target="_new"></a>
</div>
</body>
</html>