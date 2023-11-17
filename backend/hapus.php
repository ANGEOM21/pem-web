<?php
require './../config/db.php';

if (isset($_POST['submit'])) {
	global $db_connect;
	$id = $_POST['id'];

	// Perform the DELETE query
	$result = mysqli_query($db_connect, "DELETE FROM products WHERE id = $id");

	// Check if the query was successful
	if ($result) {
		echo "<script>alert('Data berhasil dihapus');</script>";
	} else {
		echo "<script>alert('Data gagal dihapus');</script>";
	}
	header('location: ./../show.php');
}
