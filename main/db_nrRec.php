<?php

function nrRec($table, $id)
{
	$conn = OpenCon();
	$result = $conn->query("SELECT * FROM ".$table);
	$number;
	while ($row = mysqli_fetch_assoc($result))
		$number = $row[$id];
		
	CloseCon($conn);
	return $number;
	
}
?>