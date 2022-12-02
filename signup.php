<?php

$pagename="Sign Up"; //Create and populate a variable called $pagename

echo "<link rel=stylesheet type=text/css href=loginstyles.css>";
include("header1.php");
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";

echo'
    
    <section2>
        <div class="container1">
            <div class="cont">
                    <form action="signupval.php" method="POST">
                    <div class="formsign-up">
                        <h2><b>Sign up</b></h2>
                            
                            <input type="text" required placeholder="Enter Name" name="fname">
                            
                            <input type="email" required placeholder="Enter email address" name="email">
                            
                            <input type="password" required placeholder="Enter password" name="password" >
                            
                            <input type="password" required placeholder="Confirm Password" name="conPassword" >
                            
                            <input type="number" required placeholder="Age" name="age">

                            <p class="oneofus">
                            One Of Us? <b><a href="login.php">LOGIN</a></b></p>

                        <button type="submit" class="submit">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </section2>';
echo "</body>";
?>