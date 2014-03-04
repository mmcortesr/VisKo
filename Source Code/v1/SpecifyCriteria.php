<?php
session_start();

$host='earth.cs.utep.edu';
$user='cs4311team2sp14';
$password='treeBranch@6';
$database='cs4311team2sp14';
$connection = mysql_connect($host, $user, $password);
if(!$connection){
die('Could not connect: '. mysql_error());
//Start the session of this php page

}

$_SESSION['Email']="mmrcortes@gmail.com";
 


?>
<!DOCTYPE html>
<html>

<head>
<title>Speciy Criteria </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style1.css" media="screen" />
<link rel="stylesheet" type="text/css" href="datepicker.css" media="screen" />
<script src="bootstrap-datepicker.js"></script>
<script>
function setfields()
{
	alert("wtf");

	query="SELECT * FROM History WHERE Email=mmrcortes@gmail.com";
	alert(query);


	var y = "";
	var x = document.getElementById("abs").selectedIndex;
	if(x!=0)
	{
		y = document.getElementById("abs").options;
		document.abs1.value=y[x].text;
		query = query.", WHERE 'Abstraction' =".document.abs1.value;
	}	
	x = document.getElementById("url").selectedIndex;
	if(x!=0)
	{
		y = document.getElementById("url").options;
		document.url1.value=y[x].text;	
		query = query.", WHERE 'url' =".document.url1.value;

	}
	x = document.getElementById("set").selectedIndex;
	if(x!=0)
	{
		y = document.getElementById("set").options;
		document.vs1.value=y[x].text;	
		query = query.", WHERE 'ViewerSet' =".document.vs1.value;
	}
	x = document.getElementById("format").selectedIndex;
	if(x!=0)
	{
		y = document.getElementById("format").options;
		document.sf1.value=y[x].text;	
		query = query.", WHERE 'SourceFormat'=".document.sf1.value;

	}
	x = document.getElementById("type").selectedIndex;
	if(x!=0)
	{
		y = document.getElementById("type").options;
		document.st1.value=y[x].text;	
		query = query.", WHERE 'sourceType'=".document.st1.value;

	}
	x = document.getElementById("ttype").selectedIndex;
	if(x!=0)
	{
		y = document.getElementById("ttype").options;
		document.tt1.value=y[x].text;	
		query = query.", WHERE 'targetType' = ".document.tt1.value;

	}
	x = document.getElementById("tformat").selectedIndex;
	if(x!=0)
	{
		y = document.getElementById("tformat").options;
		document.tf1.value=y[x].text;
		query = query.", WHERE 'TargetFormat' = ".document.ft1.value;
	
	}
	document.qry.value=query;

	alert(query);
}
</script>
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
	  <p> <b> Visualization Search Criteria</b> </p>
	<p>	 </p>
       	<!---Dropdown Lists--> 

	<form action="SpecifyCriteria.php" method="post">
   	 <p><label>Abstraction:</label>
	<input type="hidden" id="abs1" name="abs1" >
   	 <select name="abs" id="abs" style="width: 225px; -webkit-appearance: menulist-button; border-color: rgb(153, 153, 153);">
		<?php 
	/* Select database to populate dropdown*/
	$db_selection= mysql_select_db($database, $connection);
	$sql = mysql_query("SELECT DISTINCT Abstraction  FROM History");
	echo "<option value=\"abs\">Any Abstraction</option>";	
	while ($row = mysql_fetch_array($sql)){
	echo "<option value=\"abs\">" . $row['Abstraction'] . "</option>";
	}
	?> </select> </p>
	 
	<p><label>Input URL:</label>
	<input type="hidden" id="url1" name="url1" >
   	 <select name="url"  style="width: 235px; -webkit-appearance: menulist-button; border-color: rgb(153, 153, 153);">
	<?php 
	/* Select database to populate dropdown*/
	$db_selection= mysql_select_db($database, $connection);
	$sql = mysql_query("SELECT DISTINCT url  FROM History");
	echo "<option value=\"abs\">Any URL</option>";	
	while ($row = mysql_fetch_array($sql)){
	echo "<option value=\"url\">" . $row['url'] . "</option>";
	}
	?> 
         </select></p>
  

	 <p><label>Viewer Set:</label>
	<input type="hidden" id="vs1" name="vs1" >
   	 <select name="set"  style="width: 230px; -webkit-appearance: menulist-button; border-color: rgb(153, 153, 153);">
       	<?php 
	/* Select database to populate dropdown*/
	$db_selection= mysql_select_db($database, $connection);
	$sql = mysql_query("SELECT DISTINCT ViewerSet  FROM History");
	echo "<option value=\"abs\">Any Viewer Set</option>";
	while ($row = mysql_fetch_array($sql)){
	echo "<option value=\"vs\">" . $row['ViewerSet'] . "</option>";
	}
	?>  </select> </p>

	 <p><label>Source Format:</label>
	<input type="hidden" id="sf1" name="sf1" >
   	 <select name="format" style="width: 200px; -webkit-appearance: menulist-button; border-color: rgb(153, 153, 153);">
	<?php 
	/* Select database to populate dropdown*/
	$db_selection= mysql_select_db($database, $connection);
	$sql = mysql_query("SELECT DISTINCT SourceFormat  FROM History");
	echo "<option value=\"abs\">Any Source Format</option>";
	while ($row = mysql_fetch_array($sql)){
	echo "<option value=\"sf\">" . $row['SourceFormat'] . "</option>";
	}
	?> 
         </select></p>

	<p><label>Source Type:</label>
	<input type="hidden" id="st1" name="st1" >
   	 <select name="type" style="width: 218px; -webkit-appearance: menulist-button; border-color: rgb(153, 153, 153);">
       	<?php 
	/* Select database to populate dropdown*/
	$db_selection= mysql_select_db($database, $connection);
	$sql = mysql_query("SELECT DISTINCT sourceType  FROM History");
	echo "<option value=\"abs\">Any Source Type</option>";
	while ($row = mysql_fetch_array($sql)){
	echo "<option value=\"st\">" . $row['sourceType'] . "</option>";
	}
	?>  
	</select> </p>


	<p><label>Target Type:</label>
	<input type="hidden" id="tt1" name="tt1" >
   	 <select name="ttype" style="width: 220px; -webkit-appearance: menulist-button; border-color: rgb(153, 153, 153);">
       	<?php 
	/* Select database to populate dropdown*/
	$db_selection= mysql_select_db($database, $connection);
	$sql = mysql_query("SELECT DISTINCT TargetType  FROM History");
	echo "<option value=\"abs\">Any Target Type</option>";
	while ($row = mysql_fetch_array($sql)){
	echo "<option value=\"tt\">" . $row['TargetType'] . "</option>";
	}
	?>   </select> </p>


	<p><label>Target Format:</label>
	<input type="hidden" id="tf1" name="tf1" >
   	 <select name="tformat" style="width: 207px; -webkit-appearance: menulist-button; border-color: rgb(153, 153, 153);">
        	<?php 
	/* Select database to populate dropdown*/
	$db_selection= mysql_select_db($database, $connection);
	$sql = mysql_query("SELECT DISTINCT TargetFormat  FROM History");
	echo "<option value=\"abs\">Any Target Format</option>";
	while ($row = mysql_fetch_array($sql)){
	echo "<option value=\"tf\">" . $row['TargetFormat'] . "</option>";
	}
	?> 
	 </select> </p>

	
 	 <p><input type="submit" value="Search" style="width:100px;" onclick="setfields()" /></p>
	
	<input type="hidden" id="qry" name="qry" >
	</form>

	<hr/>	
		</div>
	<?php
	/* Select database to check dropdown menus */
	
	if(!empty($_POST['qry']))
	{
		echo"<table border=\"10\"><tr>";
		$db_selection= mysql_select_db($database, $connection);
		$counter=1;
		while ($row = mysql_fetch_array($POST['qry']))
		{
			if($counter%4==0)
			{
				echo"</tr>";
				echo"<tr>";
			}	
			echo"<td>".$row['Images']."</td>";
			$counter++;
		}
		echo "</tr></table>";
	}
		?>
		</div>
	</body>
</html>



