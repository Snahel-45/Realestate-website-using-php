<?php

$con = new mysqli("localhost","root","Snahel@123","developers");

	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>