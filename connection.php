<?php

function db_connection () {
	$host = "sql212.epizy.com";
	$db_user = "epiz_25337652";
	$db_pass = "SkN2MVSLwq";
	$db_name = "epiz_25337652_database2809";

	$con = new mysqli ($host, $db_user, $db_pass, $db_name);
	if($con->connect_error){
		die ("$con->connect_error");
	}
	else{
		return $con;
	}
}

?>