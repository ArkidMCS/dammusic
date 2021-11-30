<html>
<body>
<p>

<?php
include("../main/db_connection.php");
include("../main/db_execSql.php");
include("../main/db_nrRec.php");

$table = "Artist";

$conn = OpenCon();

echo "Connected Successfully";

ExecSql("INSERT INTO ".$table." (artist_id, artist_name) VALUES ('".nrRec($table, "artist_id")+1 ."', '".$_POST["artist_name"]."');");

CloseCon($conn);
?>
</p>

<a href=<?php echo $insert; ?>><button type="button">Back</button></a>

</body>
</html>