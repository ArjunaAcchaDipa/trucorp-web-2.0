<?php
	$connect = mysqli_connect("172.20.0.2", "root", "hahgimana", "trucorp");
	
	if (!$connect)
	{
		echo "Failed to connect to the database";
		die;
	}

	$query = "select * from users";
	$result = $connect->query($query);

	echo "<h1>Trucorp-Web-2.0</h1>";

	if ($result->num_rows > 0)
	{
		echo "Inside the database:<br>";
		$row = 1;
		echo "<table>";
			echo "<tr>";
				echo "<th>No.</th>";
				echo "<th>Nama</th>";
				echo "<th>Alamat</th>";
				echo "<th>Jabatan</th>";
			echo "</tr>";
			while ($data = $result->fetch_assoc())
			{
				echo "<tr>";
					echo "<td>" . $row . "</td>";
					echo "<td>" . $data["Nama"] . "</td>";
					echo "<td>" . $data["Alamat"] . "</td>";
					echo "<td>" . $data["Jabatan"] . "</td>";
				echo "</tr>";
				$row++;
			}
		echo "</table>";
	}
	else
	{
		echo "Failed to read the tables";
	}
?>

<style>
	table, th, td {
		border: 0.1px solid black;
		border-collapse: collapse;
	}
</style>