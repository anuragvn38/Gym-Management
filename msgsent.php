<?php

include("thisisdata.php");

include("header1.php");
echo "<link rel=stylesheet type=text/css href=loginstyles.css>";

$Email = $_POST['Email'];
$Name = $_POST['Name'];
$message = $_POST['message'];

$SQL = "insert into `contactform` (`Email`,`Name`, `message`) VALUES ('$Email','$Name','$message')";

if(mysqli_query($con,$SQL))
{
    echo "<div class=success><h2>Message Sent Successfully!</h2>
    <br><h2>Back to <a href=dashboard.php>Home</a></h2>
    </div>";
}
else{
    
    echo "<div class=errordiv><h2>Message not sent!</h2>";
    mysqli_error($con);
    echo "
    <br><h2>Try Again -<a href=contact.php>Contact Us</a></h2>
    </div>";
}


?>