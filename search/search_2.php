<html>
<head>
  <meta charset="utf-8">
  <title>Song Search</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<body>

<h2>Search songs with a minimum rating and a specific genre</h2>

<form action="result_2.php" method="post">
	Genre: <input type="text" id="Genre" name="genre_id"><br>
    
    <script>
        $(function() {
            $("#Genre").autocomplete({
                source: "ac/genre_name.php"
            });
        });
    </script>
    
	Minimum rating (out of 5 stars): <input type="text" name="stars"><br><br>
	<input type="submit">
</form>

</body>
</html>