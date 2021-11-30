<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    error_log("Private page accessed without login session.", 0);
    header("location:maintenance.php");  
} else {  
?>  
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Insert Page</title>
</head>

<body>
	<h2>Welcome, <?=$_SESSION['sess_user'];?>! <a href="logout.php">Logout</a></h2>  
	
	<a href="insert/song.html">Song</a><br>
	<a href="insert/artist.html">Artist</a><br>
	<a href="insert/singer.html">Singer</a><br>
	<a href="insert/band.html">Band</a><br>
	<a href="insert/feature.html">Feature</a><br>
	<a href="insert/album.html">Album</a><br>
	<a href="insert/genre.html">Genre</a><br>
	<a href="insert/rating.html">Rating</a><br>
	<a href="main/created.php">created</a><br>
	<a href="main/produce_a.php">produce_a</a><br>
	<a href="main/song_fb.php">song_fb</a><br>
	<a href="main/featured.php">featured</a><br>
</body>
</html>
<?php  
}  
?> 