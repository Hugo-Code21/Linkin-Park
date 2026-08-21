<?php

$host = mysqli_connect("localhost", "root", "", "db_linkin_park");

if (!$host) {
	die("Koneksi database gagal: " . mysqli_connect_error());
}

$db = $host;
?>