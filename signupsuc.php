<?php

$pagename="“Your Login Results"; //Create and populate a variable called $pagename

echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include("header1.php");
echo "<link rel=stylesheet type=text/css href=loginstyles.css>";

echo "<div class='success'>
     <div class='text'>
     <h2><b>SignUp Success</b></h2>
     <p>You have successfully signed up.</p>";
echo "<h4>Welcome ".$_SESSION['user_name'];
echo "</h4><p>
     <a href='dashboard.php'>Continue</a><p>
     </div>
    </div>";
?>