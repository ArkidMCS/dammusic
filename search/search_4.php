<html>
<head>
  <meta charset="utf-8">
  <title>Song Search</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<body>

<h2>Search songs with a minimum duration</h2>

<form action="result_4.php" method="post">
    
	First Genre: <input type="text" id="Genre1" name="genre_id1"><br>
    
    <script>
        $(function() {
            $("#Genre1").autocomplete({
                source: "ac/genre_name.php"
            });
        });
    </script>
    
	Second Genre: <input type="text" id="Genre2" name="genre_id2"><br>

    <script>
        $(function() {
            $("#Genre2").autocomplete({
                source: "ac/genre_name.php"
            });
        });
    </script>
    
	<input type="submit">
</form>

</body>
</html>