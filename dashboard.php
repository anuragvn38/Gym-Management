<script src=main.js></script>
<?php
echo "<head>
<link rel=stylesheet href=style.css>

<script src=https://weloveiconfonts.com/api/?family=fontawesome></script>
<title>Gym Management System</title>
</head>";


echo "<body>";
include ("header1.php");
echo "	
		<div class=sidebar>
		<ul class=list>
			<li><a onclick=func()><span>My Profile</span></a></li>
			<li><a onclick=func1()><span>Members</span></a></li>
			<li><a onclick=func2()><span>Trainer</span></a></li>
			<li><a onclick=func3()><span>Attendance</span></a></li>
			<li><a onclick=func4()><span>Routine</span></a></li>
			<li><a onclick=func5()><span>BMI</span></a></li>
		</ul>
	</div>

	
";

				include "thisisdata.php";
    	if(isset($_SESSION["userid"])){
       			$asql = "SELECT username FROM loginform WHERE user_id='$_SESSION[userid]'";
       			$aquery = mysqli_query($con,$asql);
       			$arow=mysqli_fetch_array($aquery);
       			$sql = "SELECT age FROM loginform WHERE user_id='$_SESSION[userid]'";
       			$query = mysqli_query($con,$sql);
       			$row=mysqli_fetch_array($query);
       			$bsql = "SELECT email FROM loginform WHERE user_id='$_SESSION[userid]'";
       			$bquery = mysqli_query($con,$bsql);
       			$brow=mysqli_fetch_array($bquery);
				   echo  '	
				   <div id=myprofile>
						<div class=avatar>	
						<img src=https://www.pngarts.com/files/3/Avatar-PNG-Image.png class=pic>
	   			<p id=avatarname value=Name> '.$arow["username"]. '</p>
				<p id=avatarage value=Age>'.$row['age']. '</p>
				<p id=avataremail value=Email>'.$brow['email']. '</p>
			
			</div>
	</div>
';
    }
   	else{header("location: dashboardext.php");}
	
	include("thisisdata.php");
		$ysql = "SELECT username FROM loginform";
       	$yquery = mysqli_query($con,$sql);
       	$yrow=mysqli_fetch_array($query);

echo "
	<div id=members>
		<div id=memdiv>
			<ul id=memlist>
				<li><div class=memcard>Anurag</div></li>
				<li><div class=memcard>Pranav</div></li>
				<li><div class=memcard>Shreyans</div></li>
			</ul>
		</div>
	</div>

	<div id=trainers>
		<div class=avatar>
			<img src=https://www.pngarts.com/files/3/Avatar-PNG-Image.png class=pic>
			<p>Sharma</p>
				<p>27</p>
				<p>Pune, IN</p>
				<p>Sharma@gmail.com</p>
		</div>
	</div>

	<div id=attendance>
		<div>
			<div class=container>

				<div class=calendar>
			  
				  <header>
			  
					<h2>September</h2>
			  
					<a class=btn-prev fontawesome-angle-left href=#></a>
					<a class=btn-next fontawesome-angle-right href=#></a>
			  
				  </header>
			  
				  <table>
			  
					<thead>
			  
					  <tr>
			  
						<td>Mo</td>
						<td>Tu</td>
						<td>We</td>
						<td>Th</td>
						<td>Fr</td>
						<td>Sa</td>
						<td>Su</td>
			  
					  </tr>
			  
					</thead>
			  
					<tbody>
			  
					  <tr>
						<td class=prev-month>26</td>
						<td class=prev-month>27</td>
						<td class=prev-month>28</td>
						<td class=prev-month>29</td>
						<td class=prev-month>30</td>
						<td class=prev-month>31</td>
						<td>1</td>
					  </tr>
					  <tr>
						<td>2</td>
						<td>3</td>
						<td>4</td>
						<td>5</td>
						<td>6</td>
						<td>7</td>
						<td>8</td>
					  </tr>
					  <tr>
						<td>9</td>
						<td class=event>10</td>
						<td>11</td>
						<td>12</td>
						<td>13</td>
						<td>14</td>
						<td>15</td>
					  </tr>
					  <tr>
						<td>16</td>
						<td>17</td>
						<td>18</td>
						<td>19</td>
						<td>20</td>
						<td class=event>21</td>
						<td>22</td>
					  </tr>
			  
					  <tr>
						<td class=current-day event>23</td>
						<td>24</td>
						<td>25</td>
						<td>26</td>
						<td>27</td>
						<td>28</td>
						<td>29</td>
					  </tr>
					  <tr>
						<td>30</td>
						<td class=next-month>1</td>
						<td class=next-month>2</td>
						<td class=next-month>3</td>
						<td class=next-month>4</td>
						<td class=next-month>5</td>
						<td class=next-month>6</td>
					  </tr>
			  
					</tbody>
			  
				  </table>
			  
				</div> <!-- end calendar -->
			  
			  </div> <!-- end container -->
		</div>
	</div>

	<div id=routine>
		

		
	</div>
	";
	
?>
	<div id="bmi">
		<div class="bmiform">
		<form onsubmit="return calcBMI();">
		System:
		<label>
		  <input type="radio" id="bmi-metric" name="bmi-measure" onchange="measureBMI()" checked/> Metric
		</label>
		<label>
		  <input type="radio" id="bmi-imperial" name="bmi-measure" onchange="measureBMI()"/> Imperial
		</label>
		<br><br>
	   
		Weight:
		<input id="bmi-weight" type="number" min="1" max="635" required/> 
		<span id="bmi-weight-unit">KG</span>
		<br><br>
	   
		Height:
		<input id="bmi-height" type="number" min="54" max="272" required/>
		<span id="bmi-height-unit">CM</span>
		<br><br>
	   
		<input type="submit" value="Calculate BMI"/>
		<input type="reset" value="Reset"/>
		<div id="bmi-results"></div>
	  </form>
		</div>
</div>
</div>

</body>	
</html>