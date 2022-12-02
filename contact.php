<?php
echo "
<html>
<head>
		<meta charset=UTF-8>
	<link rel=stylesheet href=style.css>
	<title>
		About Us
	</title>
</head>
<body>
<div class=banner>
		<div class=navbar>
			<h1> <a href=login.php class=gymlogo>Gym Management System</a> </h1>
				<ul>
				<li><a href=about.php>About</a></li>
				<li><a href=https://healthxp.in>Supplements</a></li>
				<li><a href=#>Contact</a></li>
				</ul>
		</div>
		<div class=contactus>
			<form class=contactinfo action=msgsent.php method=POST> 
				<h1>Leave us a message</h1>
				<input type=text name=Email placeholder=Email id=Email>
				<input type=text name=Name placeholder=Name id=Name>
				<textarea name=message id=areatext placeholder=Message></textarea>
				<button type=submit name=Submitmsg id=submitmsg>Submit</button>
				<h3>Or contact us here<br>anurag123@gmail.com<br>9821724951</h3>
			</form>
		</div>
	</div>
</body>
</html>
";
?>