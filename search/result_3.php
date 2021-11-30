<html>
<body>
<p>

<?php
include("../main/db_connection.php");

$table = "Song";

$conn = OpenReadCon();

$result = mysqli_query($conn, "
	SELECT s.song_id, s.song_name
	FROM Song s, created c
	WHERE s.song_id = c.song_id AND c.release_year BETWEEN ".$_POST["min_release_year"]." AND ".$_POST["max_release_year"]);
?>

Results: <br>
<?php while ($array = mysqli_fetch_assoc($result)) { ?> 
<a href="../single_song.php?sid=<?php echo $array["song_id"]; ?> "> <?php echo $array["song_name"];?> </a>
<?php echo '<br>'; } 

CloseCon($conn);
?>
</p>

<a href=<?php echo $central; ?>><button type="button">Back</button></a>

</body>
</html>