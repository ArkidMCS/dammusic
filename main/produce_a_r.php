<html>
<body>
<p>

<?php
include("db_connection.php");
include("db_execSql.php");

$table = "produced_a";

$conn = OpenCon();

echo "Connected Successfully. ";

ExecSql("INSERT INTO ".$table." (artist_id, album_id, release_year) VALUES ('".$_POST["artists"]."', '".$_POST["songs"]."', '".$_POST["release_year"]."')");

CloseCon($conn);
?>
</p>

<a href=<?php echo $insert; ?>><button type="button">Back</button></a>

</body>
</html>