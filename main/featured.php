<html>
<head>
<script type="text/javascript" src="popUp.js"></script>
<link rel="stylesheet" href="popup.css">
</head>

<body>

<button type="button" class="open-button" onclick="openForm('Form')">Choose Feature and Artist</button>

<div class="form-popup" id="Form">
  <form action="featured_r.php" class="form-container" method="post">
	<h1>Choose Feature</h1>
	
	<label for="Song">Choose a feature:</label>
	<select id="Song" name="songs">
		<?php
			include("db_connection.php");
			$conn = OpenReadCon();
			$sql = "SELECT Feature.song_id, Song.song_name FROM Feature, Song WHERE Feature.song_id = Song.song_id";
			$result = mysqli_query($conn, $sql);

			while ($row = mysqli_fetch_array($result)) {
			   echo "<option value='" .$row['song_id']."'> ".$row['song_name'] . "</option>"; 
			}
			CloseCon($conn);
		?>
	</select>
	
	<h1>Choose Artist</h1>
	
	<label for="Artist">Choose a artist:</label>
	<select id="Artist" name="artists">
		<?php
			$conn = OpenReadCon();
			$sql = "SELECT Artist.artist_id, Artist.artist_name FROM Artist";
			$result = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_array($result)) {
			   echo "<option value='" .$row['artist_id']."'> ".$row['artist_name'] . "</option>"; 
			}
			CloseCon($conn);
		?>
	</select>
	
	Featured artists count: <input type="text" name="artist_count"><br>
	
	<button type="submit" class="btn">Submit</button>

	<button type="button" class="btn cancel" onclick="closeForm('Form')">Close</button>
  </form>
</div>

</body>
</html>