<html>
<body>
<p>

<?php
include("main/db_connection.php");

$table = "Song";

$conn = OpenReadCon();

$song = mysqli_query($conn, "
SELECT s.song_name, s.song_length
FROM Song s
WHERE s.song_id = '".$_GET["sid"]."'");

$song = mysqli_fetch_assoc($song);

$artist = mysqli_query($conn, "
SELECT ar.artist_name, created.release_year
FROM Song s, Artist ar, created
WHERE created.song_id = s.song_id AND created.artist_id = ar.artist_id
AND s.song_id = '".$_GET["sid"]."'");

$artist = mysqli_fetch_assoc($artist);

$album = mysqli_query($conn, "
SELECT a.album_name
FROM Song s, Album a, contains
WHERE contains.song_id = s.song_id AND contains.album_id = a.album_id
AND s.song_id = '".$_GET["sid"]."'");

$genre = mysqli_query($conn, "
SELECT g.genre_name 
FROM Song s, Genre g, song_genre sg
WHERE sg.song_id = s.song_id AND sg.genre_id = g.genre_id
AND s.song_id = '".$_GET["sid"]."'");

$rating = mysqli_query($conn, "
SELECT r.stars 
FROM Song s, Rating r, song_fb
WHERE song_fb.song_id = s.song_id AND song_fb.feedback_id = r.feedback_id
AND s.song_id = '".$_GET["sid"]."'");

$rating = mysqli_fetch_assoc($rating);

?>

Results: <br>
	Name: <?php echo $song["song_name"];?> <br>
	Length in seconds: <?php echo floor($song["song_length"]/60) . ':' . substr(str_repeat(0, 2).$song["song_length"]%60, - 2) .' long'; ?>
	
<br> Release Year: <?php echo $artist["release_year"]; ?>
<br> Artist: <?php echo $artist["artist_name"]; ?>

<br> Album: 
<?php if(mysqli_num_rows($album) == 0) echo 'Single';?>
<?php while ($album2 = mysqli_fetch_assoc($album)) { ?> 
<?php echo $album2["album_name"] . '<br>';?>
<?php } ?>

<br>
<?php while ($genre2 = mysqli_fetch_assoc($genre)) { ?> 
<?php echo 'Genre: '.$genre2["genre_name"].'<br>';?>
<?php } ?>

<br> Rating: <?php echo $rating["stars"]." stars"; ?>

<?php
CloseCon($conn);
?>
</p>

<a href=<?php echo $central; ?>><button type="button">Back</button></a>

</body>
</html>