<?php

	$conn = mysqli_connect('localhost','id20115698_pranav','Tuffy123456.', 'id20115698_pranavdb');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
