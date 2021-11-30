<html>
<body>
<p>

<?php
include("../main/db_connection.php");
include("../main/db_execSql.php");
include("../main/db_nrRec.php");

$isa = "Song";
$table = "Feature";
$id = nrRec($isa, "song_id") + 1;
	
$conn = OpenCon();

echo "Connected Successfully";

ExecSql("INSERT INTO ".$isa." (song_id, song_name, song_length) VALUES ('".$id."', '".$_POST["song_name"]."', '".$_POST["song_length"]."');");
ExecSql("INSERT INTO ".$table." (song_id) VALUES ('".$id."');");

CloseCon($conn);
?>
</p>

<a href=<?php echo $insert; ?>><button type="button">Back</button></a>

</body>
</html>