<html>
<body>
<p>

<?php
include("../main/db_connection.php");

$table = "Song";

$conn = OpenReadCon();

$result = mysqli_query($conn, "
SELECT Song.song_id, Song.song_name
FROM Song, song_genre, Genre, Rating, song_fb
WHERE song_genre.genre_id = Genre.genre_id 
AND song_genre.song_id = Song.song_id 
AND Genre.genre_name = '".$_POST["genre_id"]."' 
AND song_fb.song_id = Song.song_id
AND song_fb.feedback_id = Rating.feedback_id
AND Rating.stars >='".$_POST["stars"]."'");

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