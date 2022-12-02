
<?php
include("thisisdata.php");
mysqli_select_db($db);

if(isset($_post['Username'])){
	$uname=$_post['Username'];
    $emaul=$post['Email'];
	$password=$_post['Password'];
    

	$sqli="Select * from loginform where Username='".$uname."' AND Email='".$emaul."' AND Password='".$password."' ";
	$result=mysqli_query($sqli);

	if(mysqli_num_rows($result)==1){
		echo "You have succesfully Logged In";
		exit();
	}

	else{
		echo "You Have entered incorrect passsword";
		exit();
	}
}
?>