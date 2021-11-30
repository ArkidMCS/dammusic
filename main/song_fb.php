<html>
<head>
<script type="text/javascript" src="popUp.js"></script>
<link rel="stylesheet" href="popup.css">
</head>

<body>

<button type="button" class="open-button" onclick="openForm('Form')">Choose Song and Feedback</button>

<div class="form-popup" id="Form">
  <form action="song_fb_r.php" class="form-container" method="post">
	<h1>Choose Song</h1>
	
	<label for="Song">Choose a song:</label>
	<select id="Song" name="songs">
		<?php
			include("db_connection.php");
			$conn = OpenReadCon();
			$sql = "SELECT Song.song_id, Song.song_name FROM Song";
			$result = mysqli_query($conn, $sql);

			while ($row = mysqli_fetch_array($result)) {
			   echo "<option value='" .$row['song_id']."'> ".$row['song_name'] . "</option>"; 
			}
			CloseCon($conn);
		?>
	</select>
	
	<h1>Choose Feedback</h1>
	
	<label for="Artist">Choose a feedback:</label>
	<select id="Artist" name="artists">
		<?php
			$conn = OpenReadCon();
			$sql = "SELECT Feedback.feedback_id, Feedback.comment FROM Feedback";
			$result = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_array($result)) {
			   echo "<option value='" .$row['feedback_id']."'> ".$row['comment'] . "</option>"; 
			}
			CloseCon($conn);
		?>
	</select>
	
	Reference: <input type="text" name="reference"><br>
	
	<button type="submit" class="btn">Submit</button>

	<button type="button" class="btn cancel" onclick="closeForm('Form')">Close</button>
  </form>
</div>

</body>
</html>