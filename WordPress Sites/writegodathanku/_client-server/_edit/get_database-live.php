<?php
	$con = mysql_connect("ip-72-167-252-71", "scxserv_aike", "qwerty321!@#");
	
	if (!$con) {
		die('Could not connect: ' . mysql_error());
	} 
	
	mysql_select_db("scxserv_writegodathanku", $con);
	
	$query = "
		SELECT * 
		FROM wp_users 
		WHERE user_login = '$user' 
	";
	
	$result = mysql_query($query);
	$user_info = mysql_fetch_array($result);
?>