<html>
<body>
<p>

<?php
include("../main/db_connection.php");
include("../main/db_execSql.php");
include("../main/db_nrRec.php");

$table = "Artist";

$id = nrRec($table, "artist_id")+1;

$conn = OpenCon();

echo "Connected Successfully";

ExecSql("INSERT INTO ".$table." (artist_id, artist_name) VALUES ('".$id."', '".$_POST["artist_name"]."');");
ExecSql("INSERT INTO Singer (artist_id, birth_year) VALUES ('".$id."', '".$_POST["birth_year"]."');");

CloseCon($conn);
?>
</p>

<a href=<?php echo $insert; ?>><button type="button">Back</button></a>

</body>
</html>