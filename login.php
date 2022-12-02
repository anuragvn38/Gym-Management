<?php

echo "<body>";
echo "<link rel=stylesheet type=text/css href=loginstyles.css>";
include ("header1.php"); //include header layout file

echo'
		<div class="signinform">
			<form action="signinval.php" method="POST">
			<h2><b>Sign In</b></h2>
			<input type="text" name="email" placeholder="Email" id="Email">
			<input type="Password" name="password" placeholder="Password" id="Password">
			<button type="submit" name="submit" value="login">Sign In</button>
			</form>
				<form id="already" method="post" action="signup.php">
				<button id="alreadytext">New Here? Click to Sign up!</button>
			</form>
		</div>';
echo "</body>"
?>

