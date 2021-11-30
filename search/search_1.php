<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Song Search</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
    
<body>

<h2>Search songs with a minimum duration</h2>
<h4>Inputting a name will only show results with the exact name</h4><br>

<form action="result_1.php" method="post">
Song: <input type="text" id="song_name" name="song_name"><br>
<script>
    $(function() {
        $("#song_name").autocomplete({
            source: "ac/song_name.php"
        });
    });
</script>

Length (in seconds): <input type="text" id="song_length" name="song_length"><br><br>
    
<script>
    $(function() {
        $("#song_length").autocomplete({
            source: "ac/song_length.php"
        });
    });
</script>
    
<input type="submit"><br>
</form>

REFERENCE: <br>
<?php
include("../main/db_connection.php");
$conn = OpenReadCon();

$result = mysqli_query($conn, "SELECT * FROM Song");

while ($array = mysqli_fetch_assoc($result)) {
	echo 'Song name: '.$array["song_name"].', '.floor($array["song_length"]/60) .':'.substr(str_repeat(0, 2).$array["song_length"]%60, - 2) .' long<br>';
}

CloseCon($conn)?>

</body>
</html>