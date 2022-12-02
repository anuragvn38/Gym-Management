<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Gym Management System</title>
</head>
<body>
	<div class="banner">
		<div class="navbar">
			<h1> <a href="dashboard.php" class="gymlogo">Gym Management System</a> </h1>
				<ul>
				<li><a href="about.php">About</a></li>
				<li><a href="https://healthxp.in">Supplements</a></li>
				<li><a href="contact.php">Contact</a></li>
				<?php
                             include "thisisdata.php";
                            if(isset($_SESSION["userid"])){
                                $sql = "SELECT username FROM loginform WHERE user_id='$_SESSION[userid]'";
                                $query = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($query);
                                
                                echo '<li>HI '.$row["username"]. '</li>
                                <li><a href="logout.php">Logout</a></li>';

                            }else{ 
                                echo "
                                <li><a href=login.php>SignIn</a></li>
                                <li><a href=signup.php>SignUp</a></li>";
                                
                            }
    ?>
				
				</ul>
		</div>
<script src="main.js"></script>
</body>	
</html>