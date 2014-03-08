<?php

/*create connection to database*/
$host='earth.cs.utep.edu';
$user='cs4311team2sp14';
$password='treeBranch@6';
$database='cs4311team2sp14';
$connection = mysql_connect($host, $user, $password);
if(!$connection){
die('Could not connect: '. mysql_error());
}
	/* Select database to populate dropdown*/
	$db_selection= mysql_select_db($database, $connection);
	$sql = mysql_query("SELECT Image  FROM VisualizationTest WHERE ");
	while ($row = mysql_fetch_array($sql)){


?>


