<?php 
header( 'Content-Type: text/html;charset=utf-8' );


function ejecutarSQLCommand($commando){
 
  $mysqli = new mysqli("localhost", "root", "vpcek20al", "standort");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if ( $mysqli->multi_query($commando)) {
     if ($resultset = $mysqli->store_result()) {
    	while ($row = $resultset->fetch_array(MYSQLI_BOTH)) {
    		
    	}
    	$resultset->free();
     }
    
   
}



$mysqli->close();
}

function getSQLResultSet($commando){
<<<<<<< HEAD
  $mysqli = new mysqli("localhost", "root", "vpcek20al", "androidsitio");
=======
  $mysqli = new mysqli("localhost", "root", "vpcek20al", "standort");
>>>>>>> b06dcb8143c4cd0e6ea5c1ef0011bb8139772b55
  /* check connection */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  if ( $mysqli->multi_query($commando)) {
	 return $mysqli->store_result();   
  }
  $mysqli->close();
}
?>
