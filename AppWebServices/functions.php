<?php


function ejecutarSQLCommand($commando){

  $mysqli = new mysqli("localhost", "root", "efm&&$0432mgTG", "st");

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


  $mysqli = new mysqli("localhost", "root", "efm&&$0432mgTG", "st");
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