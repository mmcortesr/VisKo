<?php
$host='earth.cs.utep.edu';
$user='cs4311team2sp14';
$password='treeBranch@6';
$database='cs4311team2sp14';
$connection = mysql_connect($host, $user, $password);
if(!$connection){
die('Could not connect: '. mysql_error());
} 

?>

<head>
<title>View Details </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style1.css" media="screen" />

</head>

<body> <!-- Header-->
<div id="main_container">
  <div style"position: fixed; left: 0" class="header" border="1px"> 
    <div id="logo"><a href="http://cs4311.cs.utep.edu/team2/"><img src="logo.png" alt="" border="0" /></a><font size="10" color="black"><b> VisKo</b></font></div>
       
	<!---Navigation Menu-->
	<div style="position: fixed; left:0px; top: 90px; display: block">
	 <ul id="sidebar-nav" class="Menu"> 
	<style type="text/css">a {text-decoration: none; Color: black}</style>
            <li> <font size=4> <b> <a href="http://cs4311.cs.utep.edu/team2/home.php">Home</a> </b>
            </li>
		<p>&nbsp;</p>
  		   <li><b> <a href="#">Visualize</a>    
			<p>&nbsp;</p>
		<li> <a href="http://cs4311.cs.utep.edu/team2/specifyCriteria.php">Search History</a> 
		<p>&nbsp;</p>
		<li> <a href="#">Manage Services</a>
		<p>&nbsp;</p>

		<li> <a href="#">Configure Account</a> 
 	     </b>
        </ul>
    </div>
    </div> 
	<!-- Middle Content--> 
    <div id="middle_box">
	  <p> <b> Search Results Details</b> </p>
	<p>	 </p>
       	<!---Resulting Image--> 
	<img src="VisKo.png" alt="" width= "500" Height ="230" border="1px" /> <hr>
	 <p> <b> Responsible Pipeline</b> </p>
	<!--Responsible pipelines and services-->
	<table border="1" style="width:300px">
	<tr>
  	<td>Jill</td>
  	<td>Smith</td>		
  	<td>50</td>
  	</tr>
	<tr>
  	<td>Eve</td>
  	<td>Jackson</td>		
  	<td>94</td>
	</tr>
	<tr>
  	<td>John</td>
  	<td>Doe</td>		
 	 <td>80</td>
	</tr>
	</table><hr> 
	<!--Responssible Query-->
	 <p> <b> Responsible Query</b> </p>
	<textarea rows="16" cols="70">
	At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.
	</textarea>

	</div>
	</body>
</html>




