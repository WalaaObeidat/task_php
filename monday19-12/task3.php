<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="task3.php">
  <label for="url">Enter a URL:</label><br>
  <input type="text" id="url" name="url"><br>
  <input type="submit" value="GO">
</form>
</body>
</html>

<?php

  if (isset($_POST['url'])) {
    $url = $_POST['url'];
    header("Location: $url");
    exit;
  }

echo('<br><br>');

?>