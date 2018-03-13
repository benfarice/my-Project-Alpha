<?php
	$serverName ="YOUSSEF-PC\SQLEXPRESS";
	$connectionInfo = array( "Database"=>"base_port_oman" , "CharacterSet" => "UTF-8");
	global $con;
	 $con = sqlsrv_connect( $serverName, $connectionInfo);
	if( $con ) {

	}
	else{
		//header('Location: erreur.php'); 
		echo "cannot open connection with Database";
	}
?>