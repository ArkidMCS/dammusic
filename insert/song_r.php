<html>
<body>
<p>

<?php
include("../main/db_connection.php");
include("../main/db_execSql.php");
include("../main/db_nrRec.php");

$table = "Song";

$conn = OpenCon();

echo "Connected Successfully";

ExecSql("INSERT INTO ".$table." (song_id, song_name, song_length) VALUES ('".nrRec($table, "song_id")+1 ."', '".$_POST["song_name"]."', '".$_POST["song_length"]."');");

CloseCon($conn);
?>
</p>

<a href=<?php echo $insert; ?>><button type="button">Back</button></a>

</body>
</html>