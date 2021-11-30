

<html>
<body>
<p>
	<?php
		echo 'db';
		include("db_connection.php");
		$conn = OpenCon();
		echo 'db';
		$sql = "SELECT Song.song_id, Song.song_name FROM Song";
		$result = mysqli_query($conn, $sql);
		echo $result;
			
		CloseCon($conn);
	?>
</p>

<a href="https://clabsql.clamv.jacobs-university.de/~akaleci/html/insert_page.php"><button type="button">Back</button></a>

</body>
</html>