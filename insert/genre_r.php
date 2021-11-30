<html>
<body>
<p>

<?php
include("../main/db_connection.php");
include("../main/db_execSql.php");
include("../main/db_nrRec.php");

$table = "Genre";

$conn = OpenCon();

echo "Connected Successfully";

ExecSql("INSERT INTO ".$table." (genre_id, genre_name) VALUES ('".nrRec($table, "genre_id")+1 ."', '".$_POST["genre_name"]."');");

CloseCon($conn);
?>
</p>

<a href=<?php echo $insert; ?>><button type="button">Back</button></a>

</body>
</html>