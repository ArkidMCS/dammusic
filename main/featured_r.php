<html>
<body>
<p>

<?php
include("db_connection.php");
include("db_execSql.php");

$table = "featured";

$conn = OpenCon();

echo "Connected Successfully. ";

ExecSql("INSERT INTO ".$table." (song_id, artist_id, artists_count) VALUES ('".$_POST["songs"]."', '".$_POST["artists"]."', '".$_POST["artists_count"]."')");

CloseCon($conn);
?>
</p>

<a href=<?php echo $insert; ?>><button type="button">Back</button></a>

</body>
</html>