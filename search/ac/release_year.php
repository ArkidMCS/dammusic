<?php 
include("../../main/db_connection.php");

$conn = OpenReadCon();

$searchTerm = $_GET['term']; 
$attribute = "release_year";
$table = "created";

$query = mysqli_query($conn, "SELECT DISTINCT ".$attribute." FROM ".$table." WHERE ".$attribute." LIKE '%".$searchTerm."%'");

$set = array(); 
if ($query->num_rows > 0){ 
    while ($row = mysqli_fetch_assoc($query)) {
        $data['label'] = $row['release_year']; 
        array_push ($set, $data); 
    } 
}

CloseCon($conn);
 
// Return results as json encoded array 
echo json_encode($set); 
?>