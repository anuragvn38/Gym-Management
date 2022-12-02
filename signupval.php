<?php
include("thisisdata.php");
$pagename="Your Sign Up Results"; //Create and populate a variable called $pagename

echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
echo "<link rel=stylesheet type=text/css href=loginstyles.css>";
include("header1.php");

$isEmpty = empty($_POST['fname']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['conPassword']) ;

if(!$isEmpty)
{
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $conPassword=$_POST['conPassword'];
    $age=$_POST['age'];
    
    if($password===$conPassword)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL))
        {

            $query="insert into `loginform` (`Username`,`Email`, `Password`, `age`)
            VALUES ('$fname','$email','$password','$age')";

            if(mysqli_query($con, $query))
            {
                //SIGNUP SUCCESSFULL
                $_SESSION['userid'] = $data['ID'];
		        $_SESSION['fname'] = $data['Username'];
                $_SESSION['user_name'] = $fname;
		        header("location: signupsuc.php");
            }

            else
            {
                $errNo = mysqli_errno($con);
                if($errNo == 1062)
                {
                    //EMAIL USED ERROR
                    echo "<div class=errordiv><p><b>Sign-up failed</b></p>";
                    echo "<p>Email already in use.<br>
                    You may be already registered or try another email address.</p>
                    Back to <a href='signup.php'>Sign up</a>.</div>";
                }

                else if($errNo==1064)
                {
                    //INVALID CHARACTERS ERROR
                    echo "<div class=errordiv><p><b>Sign-up failed</b></p>";
                    echo "<p>Invalid characters enterd in the form.<br>
                    Make sure you avoid the following characters: apostrophes like['] and backslashes[\].</p>
                    Back to <a href='signup.php'>Sign up</a>.</div>";
                }
            }
            // $result = mysqli_query($ con, $query) or die (mysqli_error($ con));
            // echo $result;
        }
        
        else 
        {
            //INVALID EMAIL ID
            echo "<div class=errordiv><p><b>Sign-up failed</b></p>";
            echo "<p>Email not vlaid.<br>
            Make sure you enter a correct email address.</p>
            Back to <a href='signup.php'>Sign up</a>.</div>";
        }
        
    }
    else
    {
        //PASSWORDS DONT MATCH
        echo "<div class=errordiv><p><b>Sign-up failed</b></p>";
        echo "<p>The 2 passwords are not matching.<br>
            Make sure you entered them correctly.</p>
        Back to <a href='signup.php'>Sign up</a>.</div>";
    }
    
    
    
}
else
{
    //INCOMPLETE FORM
    echo "<div class=errordiv><p><b>Sign-up failed</b></p>";
    echo "<p>Your signup form is incomplete and all fields are mandatory<br>
    Make sure you provide all the required details.</p>
    Back to <a href='signup.php'>Sign up</a>.</div>";
}

echo "</body>";
?>