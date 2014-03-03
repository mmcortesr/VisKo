
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html style="height: 100%;">
<head>
<title>VisKo</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--the css used-->
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />



<?php
	//Start the session of this php page
	session_start();
	
	
	/*Connect to the Database*/
	
	$host='earth.cs.utep.edu';
	$user='cs4311team2sp14';
	$password='treeBranch@6';
	$database='cs4311team2sp14';
	$connection = mysql_connect($host, $user, $password);
	if(!$connection){
	die('Could not connect: '. mysql_error());
}

	$count=-1;

	 if (!empty($_POST['username']) && !empty($_POST['password'])) 
	{
		$_SESSION['Email'] = $_POST['username'];

		
		//Connect with the database that will be used
		$db_connection=mysql_select_db($database, $connection);

		$sql = sprintf("SELECT Email, Password FROM UserTest WHERE Email='%s' and Password='%s'", mysql_real_escape_string($_POST['username']), mysql_real_escape_string($_POST['password'])); 

		$result=mysql_query($sql);
	 	$count=mysql_num_rows($result);
		if ($count==1) 
		{
			header('Location:http://cs4311.cs.utep.edu/team2/home.php');	
	    	} 
	}
?>
<script>
/*Check if email and password fields are not empty*/
function validateForm()
{
// ** START **
  if (document.login.username.value == "") {
    alert( "Email field is empty" );
    document.login.username.focus();
    return false ;
  }
  else if(document.login.password.value == ""){
	alert("Password Field is empty");
	 document.login.password.focus();
    return false ;

	}
  // ** END **
  return true ;

}
</script>

</head>
<body  style="height: 100%;">

<div id="main_container">

	<!--Main Header: Logo and Name -->
  <div class="header">
    <div id="logo">
	<a href="http://cs4311.cs.utep.edu/team2/">
		<img src="logo.png" alt="" border="0" />
	</a>
	<font size="10" color="black">
		<b> VisKo</b>
	</font>
    </div>
    <div class="right_header">
	<br>
	<br>
	<!--Login Form-->
	<form id='login' name="login" action="index.php" onsubmit="return validateForm()" method="post">
	<legend> 	
	<style type="text/css">a {color: blue }</style>
	<b> Login</b></legend>
	<label for='username' >Email:</label>
	<input type='text' name='username' id='username'  maxlength="50" required />
	<label for='password' >Password:</label>
	<input type='password' name='password' id='password' maxlength="50" required />
	<input type='submit' name='login' value='Login' />
	</form>
	<!--Register Form-->
	<form id='register' name="register" action="register.php">
		<input type='submit' name='register' value='Register' />
	</form>
	<p><a href="forgot.php">Forgot Password</a></p>	
	
    </div>
  </div>
	<!--Text Portion: Explaining VisKo-->
  <div id="middle_box">
    <div class="middle_box_content">
	<font size="6" color="#050834"> <b> What is VisKo? </b></font>
	<br>
	<br>
	<font size="3" color="#A9A9A9"> VisKo is a framework supporting the answering of visualization queries that allow users to specify what visualizations they want generated rather that specifying how they should be generated.</font>
	</div>
  </div> 
  <div id="middle_box">
    <div class="middle_box_content">
	<font size="6" color="#050834"> <b> What are the benefits? </b></font>
	<br>
	<br>
	<font size="3" color="#A9A9A9"> VisKo can automatically figure out how to generate visualizations given only a query that specifies what visualizations are being requested. Below is a variety of different visualizations generated from a single gravity dataset, resulting from the execution of a single VisKo query.</font>
	<br>
	<br>
	<!--Image Of Visualization -->
	<img src="VisKo.png" alt="" width= "850" Height="300" border="1px" />
    </div>
  </div>
	<p> </p>
  	<p>   </p>
	<p>	 </p>
 	 <p>   </p>
</div>

 <?php	/*Alert will that email or password do not match*/
	if($count==0) 
	{
        	echo " <script type='text/javascript'> alert ('The password and email do no match!')
		</script>";				
	}
 ?>

</body>
</html>


