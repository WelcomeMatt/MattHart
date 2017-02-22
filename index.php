
<!DOCTYPE html>
<html>
<head>
	<title>Matthew Hart | Website</title>
	<link type="text/css" rel="stylesheet" href="./stylesheet/stylesheet.css" />
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js?ver=1.4.2'></script>
</head>
<body>
	<div class="content">
		<div class="main">
			<img class="backImg" src="./img/background.JPG"/>
			<div class="title">
				<h2>Matthew<br>Hart</h2>
				<div class="mainNav">
					<p class="navItem" id="aboutBtn">About</p>
					<p>|</p>
					<p class="navItem" id="expncBtn">Experience</p>
					<p>|</p>
					<p class="navItem" id="cnnctBtn">Connect</p>
				</div>
			</div>
			<div class="info">
				<p id="infoTitle"></p>
				<p id="infoBody"></p>
			</div>
		</div>
		<script type="text/javascript">
			$(document).ready(function(){
				$(".info").hide();

				$("#expncBtn").click(function()
				{
					$("#infoTitle").html("Expe]rience");
					$("#infoBody").html("Graduate from the University of Guelph. Currently a Video Game Programming Instructor at Real Programming 4 Kids.<br>");
					$(".info").fadeIn('fast');
				});

				$("#aboutBtn").click(function()
				{
					$("#infoTitle").html("Ab]out");
					$("#infoBody").html("My name is Matthew Hart, and I am an aspiring software developer. My main interests right now lie in web and game development. I am extremely passionate about technology and love learning new things. I'm also a diehard sports fan. ");
					$(".info").fadeIn('fast');
				});

				$("#cnnctBtn").click(function()
				{
					$("#infoTitle").html("Con]nect");
					$("#infoBody").html("<a href='https://ca.linkedin.com/in/matthew-hart-b637bb128'><img src='./img/In-2C-14px.png' style='height:21px; width:21px;'/></a><br><br><u>or</u><br><br>email: matthew.r.hart94@gmail.com");
					$(".info").fadeIn('fast');
				});

				$("h2").click(function(){
					$(".info").fadeOut('fast');
				});
			});
		</script>
	</div>
	<footer>By Matthew Hart. 2017.</footer>
</body>
</html>