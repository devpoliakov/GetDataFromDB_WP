<?php
require( dirname( __FILE__ ) . '/wp-config.php' );


$con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if(!$con) {
  die('Connection failed [' . $db->connect_error . ']');
}




$query      = "SHOW TABLES FROM shopintech_vallo2";
$result = mysqli_query($con,$query);

while ($row = mysqli_fetch_row($result)) {
	echo '<br>-' . $row[0] . '<br>';

	$row_query      = "SELECT * FROM " . $row[0];
	$row_result = mysqli_query($con,$row_query);

	while ($row_row = mysqli_fetch_row($row_result)) {
		print_r($row_row);
	}
}



printf("<br>Host information: %s\n", mysqli_get_host_info($con));

$mysqli->close();
