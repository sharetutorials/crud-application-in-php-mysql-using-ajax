<?php
$connection = new mysqli("localhost","root","foradian","crud");
if (! $connection){
	die("Error in connection".$connection->connect_error);
}
?>