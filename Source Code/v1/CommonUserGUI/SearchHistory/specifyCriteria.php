	<!--Import Header with VisKo logo-->
<?php
	require_once("regHeader.inc");
?>
     

<link rel="stylesheet" type="text/css" href="style1.css" media="screen" />
<link rel="stylesheet" type="text/css" href="datepicker.css" media="screen" />
<script src="bootstrap-datepicker.js"></script>

<!--Funtion set fields, gets input from all the dropdown menus, and puts the into a query
*To send it back to the database, and get search results*/-->
<script>
function setfields()
{
	var query="SELECT * FROM History WHERE user='mmrcortes@gmail.com'";

	var temp = "";
	var y = "";
	var x = document.getElementById("abs").selectedIndex;
	if(x!=0)
	{
		y = document.getElementById("abs").options;
		document.getElementById("abs1").value=y[x].text;
		temp = query.concat(" AND Abstraction='"+y[x].text+"'");
		query = temp;
		temp="";
	}	

	x = document.getElementById("url").selectedIndex;
	if(x!=0)
	{
		y = document.getElementById("url").options;
		document.getElementById("url1").value=y[x].text;
		temp = query.concat(" AND url='"+y[x].text+"'");
		query = temp;
		temp="";
	}
	x = document.getElementById("set").selectedIndex;
	if(x!=0)
	{
		y = document.getElementById("set").options;
		document.getElementById("vs1").value=y[x].text;
		temp = query.concat(" AND viewerSet='"+y[x].text+"'");
		query = temp;
		temp="";
	}
	x = document.getElementById("format").selectedIndex;
	if(x!=0)
	{
		y = document.getElementById("format").options;
		document.getElementById("sf1").value=y[x].text;
		temp = query.concat(" AND sourceFormat='"+y[x].text+"'");
		query = temp;
		temp="";
	}
	x = document.getElementById("type").selectedIndex;
	if(x!=0)
	{
		y = document.getElementById("type").options;
		document.getElementById("st1").value=y[x].text;
		temp = query.concat(" AND sourceType='"+y[x].text+"'");
		query = temp;
		temp="";
	}
	x = document.getElementById("ttype").selectedIndex;
	if(x!=0)
	{
		y = document.getElementById("ttype").options;
		document.getElementById("tt1").value=y[x].text;
		temp = query.concat(" AND targetType='"+y[x].text+"'");
		query = temp;
		temp="";
	}
	x = document.getElementById("tformat").selectedIndex;
	if(x!=0)
	{
		y = document.getElementById("tformat").options;
		document.getElementById("tf1").value=y[x].text;
		temp = query.concat(" AND targetFormat='"+y[x].text+"'");
		query = temp;
		temp="";
	}


	document.getElementById("qry").value=query+";";
}
</script>

	<!-- Import Navigation side bar for regular user-->
	      
<?php 
 require_once("regNavigation.inc");
	?>
<br/> <br/>

	<!-- Middle Content--> 
    <div id="middle_box">
	  <p> <b> Visualization Search Criteria</b> </p>
	<br/>
       	<!---Dropdown Lists--> 

	<form action="specifyCriteria.php" method="post">
   	 <h5>Abstraction</h5>
	<input type="hidden" id="abs1" name="abs1" >
   	 <select name="abs" id="abs" style="width: 250px">
		<?php 
	/* Select database to populate dropdown*/
	$db_selection= mysql_select_db($database, $connection);
	$sql = mysql_query("SELECT DISTINCT Abstraction  FROM History");
	echo "<option value=\"abs\">Any Abstraction</option>";	
	while ($row = mysql_fetch_array($sql)){
	echo "<option value=\"abs\">" . $row['Abstraction'] . "</option>";
	}
	?> </select> </p>
	
	 <h5>Input URL</h5> 
	<input type="hidden" id="url1" name="url1" >
   	 <select name="url" id="url"  style="width: 250px">
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
  

	 <h5>Viewer Set<h5>
	<input type="hidden" id="vs1" name="vs1" >
   	 <select name="set" id="set" style="width:250px">
       	<?php 
	/* Select database to populate dropdown*/
	$db_selection= mysql_select_db($database, $connection);
	$sql = mysql_query("SELECT DISTINCT ViewerSet  FROM History");
	echo "<option value=\"abs\">Any Viewer Set</option>";
	while ($row = mysql_fetch_array($sql)){
	echo "<option value=\"vs\">" . $row['ViewerSet'] . "</option>";
	}
	?>  </select> </p>

	 <h5>Source Format</h5>
	<input type="hidden" id="sf1" name="sf1" >
   	 <select name="format" id="format" style="width: 250px">
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

	<h5>Source Type</h5>
	<input type="hidden" id="st1" name="st1" >
   	 <select name="type" id="type" style="width: 250px">
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


	<h5>Target Type</h5>
	<input type="hidden" id="tt1" name="tt1" >
   	 <select name="ttype" id="ttype" style="width: 250px">
       	<?php 
	/* Select database to populate dropdown*/
	$db_selection= mysql_select_db($database, $connection);
	$sql = mysql_query("SELECT DISTINCT TargetType  FROM History");
	echo "<option value=\"abs\">Any Target Type</option>";
	while ($row = mysql_fetch_array($sql)){
	echo "<option value=\"tt\">" . $row['TargetType'] . "</option>";
	}
	?>   </select> </p>


	<h5>Target Format</h5>
	<input type="hidden" id="tf1" name="tf1" >
   	 <select name="tformat" id="tformat" style="width: 250px">
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

	
 	 <p><input type="submit"  class="btn btn-primary" value="Search" style="width:100px;" onclick="setfields()" /></p>
	
	<input type="hidden" id="qry" name="qry" value=""/>
	</form>

	<hr/>	
	
	<?php
	/* Select database to check dropdown menus */
	
	if(isset($_POST['qry']))
	{
		echo $_POST['qry']."<br/><br/>";
		echo "<table border=\"1\"><tr>";
		$db_selection= mysql_select_db($database, $connection);
		$sql = mysql_query($_POST['qry']);
		$count = 1;
		while ($row = mysql_fetch_array($sql))
		{
			echo"<td>".$row['Images']."</td>";
			if($count % 3==0)
			{
				echo "</tr><tr>";
			}
			$count++;
		}
		echo "</tr></table>";
	}
	?>
	</div>

	<div id="middle_box">

<!-- Import footer for to end visko-->
<?php
	require_once("footer.inc"); 
?>

