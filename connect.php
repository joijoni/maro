<?php
$host = $_SERVER['HTTP_HOST'];

if($host=="localhost"){
	$server="localhost";
	$username="root";
	$password="";
	$database="msme_db";
}else{
	$server="sql111.byethost7.com";
    $username="b7_31414188";
    $password="SubJect123";
    $database="b7_31414188_msme_db";
}
	
    // this will avoid mysql_connect() deprecation error.
	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	// but I strongly suggest you to use PDO or MySQLi.
		
	$conn = mysqli_connect($server,$username,$password);
	$dbcon = mysqli_select_db($conn,$database);
	
	if ( !$conn ) {
		die("Connection failed : " . $mysqli->connect_error);
	}
    ?>