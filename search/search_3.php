<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>

<h2>Search songs produced in a range of years</h2>

<form action="result_3.php" method="post">
Earliest Year: <input type="text" id="min" name="min_release_year"><br>
    
<script>
    $(function() {
        $("#min").autocomplete({
            source: "ac/release_year.php"
        });
    });
</script>

Latest Year: <input type="text" id="max" name="max_release_year"><br>
    
<script>
    $(function() {
        $("#max").autocomplete({
            source: "ac/release_year.php"
        });
    });
</script>
    
<input type="submit">
</form>

</body>
</html>