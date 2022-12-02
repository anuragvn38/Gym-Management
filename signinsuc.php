
<?php
include("thisisdata.php");
$pagename="“Your Login Results"; //Create and populate a variable called $pagename

echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
echo "<link rel=stylesheet type=text/css href=loginstyles.css>";
include ("header1.php"); //include header layout file 



echo "<div class='success'>
    <div class='text'>
    <p><b>Login Success!</b></p>
    <p>You have successfully logged in.</p>";


    include "thisisdata.php";
    if(isset($_SESSION["userid"])){
       $sql = "SELECT username FROM loginform WHERE user_id='$_SESSION[userid]'";
       $query = mysqli_query($con,$sql);
       $row=mysqli_fetch_array($query);
       
       echo 'Welcome '.$row["username"]. '';
    }
   else{ }
   echo '<br>
   <a href=dashboard.php>Continue</a>';
echo '</div>
</div>';
?>
