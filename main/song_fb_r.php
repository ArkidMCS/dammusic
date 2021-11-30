<html>
<body>
<p>

<?php
include("db_connection.php");
include("db_execSql.php");

$table = "song_fb";

$conn = OpenCon();

echo "Connected Successfully. ";

ExecSql("INSERT INTO ".$table." (song_id, feedback_id, reference) VALUES ('".$_POST["songs"]."', '".$_POST["artists"]."', '".$_POST["reference"]."')");

CloseCon($conn);
?>
</p>

<a href=<?php echo $insert; ?>><button type="button">Back</button></a>

</body>
</html>