<html>
<body>
<p>

<?php
include("../main/db_connection.php");

$table = "Song";

$conn = OpenReadCon();

if($_POST["genre_id2"] == '0')
{
	$result = mysqli_query($conn, "

SELECT S.song_name, S.song_id
FROM Song S
WHERE S.song_id IN
    (SELECT S1.song_id FROM Song S1, song_genre GS, Genre G WHERE GS.genre_id = G.genre_id AND S1.song_id = GS.song_id AND G.genre_name = '".$_POST["genre_id1"]."')");
} else {
	$result = mysqli_query($conn, "

SELECT S.song_name, S.song_id
FROM Song S
WHERE S.song_id IN
    (SELECT S1.song_id FROM Song S1, song_genre GS, Genre G WHERE GS.genre_id = G.genre_id AND S1.song_id = GS.song_id AND (G.genre_name = '".$_POST["genre_id1"]."' OR G.genre_name = '".$_POST["genre_id2"]."'))");
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