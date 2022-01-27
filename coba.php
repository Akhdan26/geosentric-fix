<?php
	$server = 'localhost';
	$user = 'root';
	$pass = 'Geosentric2021__';
	$db = 'test';

	$conn = new mysqli($server, $user, $pass, $db);

	if ($conn->connect_error)
		die('!connection failed: ' . $conn->connect_error);

	$query = 'select * from mahasiswa';

	$result = $conn->query($query);

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc())
			echo 'nim: ' . $row['nim'] . ', nama: ' . $row['nama'] . ', alamat: ' . $row['alamat'] . '<br>';
	}
	else echo 'empty db';

	$conn->close();
?>