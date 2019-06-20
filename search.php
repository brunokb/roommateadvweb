<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Autocomplete - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $(function() {
        $("#searchAC").autocomplete({
            source: [ "Melbourne", "Sydney", "London", "Sao Paulo", "New York", "Xangai" ]
        });
    });
    </script>
</head>
<body>
 
<div class="ui-widget">
<form action="/search.php">
              <input type="text" id="searchAC" placeholder="Search" >
              <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>

 
</body>
</html>