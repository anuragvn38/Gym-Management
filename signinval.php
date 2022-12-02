<?php
include("thisisdata.php");
$pagename="“Your Login Results"; //Create and populate a variable called $pagename

echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
echo "<link rel=stylesheet type=text/css href=loginstyles.css>";
include ("header1.php");

$email = $_POST['email'];
$password = $_POST['password'];


//echo $email." ".$password;
if(empty($email) || empty($password))
{
	echo "<div class=back>
	<div class=errordiv>
	<div class=errortex><p><b>Login failed</b><br>
	Your login form is incomplete<br>Make sure you provide all the reqired details.<br>
	Back to <a href='login.php'>login</a></p></div></div>";
}
else
{
	
	$SQL = "select * from `loginform` where `email`='$email'";
	$result = mysqli_query($con,$SQL);
	$data = mysqli_fetch_array($result);
	
	if($data['email'] != $email)
	{
		echo "<div class=errordiv><div class=errortex><p><b>Login failed</b></p>";
		echo "<p>The email you entered was not recognized.<p>";
		echo "<p>Back to <a href='login.php'>login</a></p></div></div>";
	}
	else if($data['password'] != $password)
	{
		echo "<div class=errordiv><div class=errortex><p><b>Login failed</b></p>";
		echo "<p>The password you entered is not valid.<p>";
		echo "<p>Back to <a href='login.php'>login</a></p></div></div>";
	}
	
	else
	{
		 $_SESSION['userid'] = $data['user_id'];
		 $_SESSION['fname'] = $data['full_name'];
		 $_SESSION['user_name'] = $data['fname'];
		 header("location: signinsuc.php");
	}
	
}
echo "</body>";
?>