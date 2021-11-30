<html>
<body>
<p>

<?php
include("../main/db_connection.php");
include("../main/db_execSql.php");
include("../main/db_nrRec.php");

$isa = "Feedback";
$table = "Rating";
$id = nrRec($isa, "feedback_id")+1;

$conn = OpenCon();

echo "Connected Successfully";
	
ExecSql("INSERT INTO ".$isa." (feedback_id, comment) VALUES ('".$id."', '".$_POST["comment"]."');");
ExecSql("INSERT INTO ".$table." (feedback_id, stars) VALUES ('".$id."', '".$_POST["stars"]."');");

CloseCon($conn);
?>
</p>

<a href=<?php echo $insert; ?>><button type="button">Back</button></a>

</body>
</html>