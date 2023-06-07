<?php 
/**
 * 
 * Test SQL server connection thru localhost
 */
$serverName = "localhost"; //192.168.75.155

	$uid = "sa";
	$pwd = "Superadmin!123";
	$connectionInfo = array("UID" => $uid,
							"PWD" => $pwd,
							"Database" => "test_db_0",
							"MultipleActiveResultSets" => true,
							'ReturnDatesAsStrings' => true
	);

	$conn = sqlsrv_connect($serverName, $connectionInfo);

	if( $conn === false ) {
		echo "Unable to connect.</br>";
		die( print_r( sqlsrv_errors(), true));
	} else { 
        echo "<script>";
        echo 'console.log("connection ok")';
        echo "</script>";
    }

?>