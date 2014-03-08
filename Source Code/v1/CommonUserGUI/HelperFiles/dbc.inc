<?php
	//Start the session of this php page
	session_start();
	
	
	/*Connect to the Database*/
	require_once("dbc.inc");
	$host='46.4.87.104';
	$user='viskogra_team2';
	$password='treeBranch@6';
	$database='viskogra_visko';
	$connection = mysql_connect($host, $user, $password);
	if(!$connection)
	{
		die('Could not connect: '. mysql_error());
	}
	//Connect with the database that will be used
	$db_connection=mysql_select_db($database, $connection);
?>