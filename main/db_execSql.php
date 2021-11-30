<?php

function ExecSql($sql)
{
	$conn = OpenCon();
	 if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
        error_log("Error: " . $sql . $conn->error, 0);
	}
	CloseCon($conn);
}
?>