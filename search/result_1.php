<html>
<body>
<p>

<?php
include("../main/db_connection.php");

$table = "Song";

$conn = OpenReadCon();

if($_POST["song_name"] == '')
{
	$result = mysqli_query($conn, "SELECT * FROM Song WHERE Song.song_length >= '".$_POST["song_length"]."'");
} else {
	$result = mysqli_query($conn, "SELECT * FROM Song WHERE Song.song_name = '".$_POST["song_name"]."' AND Song.song_length >= '".$_POST["song_length"]."'");
}

?>

Results: <br>
<?php while ($array = mysqli_fetch_assoc($result)) { ?> 
<a href="../single_song.php?sid=<?php echo $array["song_id"]; ?> "> <?php echo $array["song_name"];?> </a>
<?php echo '<br>'; } ?>

<?php
CloseCon($conn);
?>
</p>

<a href=<?php echo $central; ?>><button type="button">Back</button></a>

</body>
</html>