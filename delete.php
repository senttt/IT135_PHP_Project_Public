<?php
session_start();
include 'database.php';
$appid = $_GET["id"];

$currentDateAndTime = date('Y-m-d H:i:s');

$query = "DELETE FROM booking WHERE id='" . $appid . "';";
		

if (mysqli_multi_query($connection, $query)) {
    echo "Record deleted successfully";
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	exit(); 
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
?>