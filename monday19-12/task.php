<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action= "task.php">
  <input type="text" name="url"><br>
  <br>
    <button type="submit" > Go </button>
</form>
</body>
</html>
<?php
if(isset($_POST['url'])){
    $url = $_POST['url'];
    header("location: $url" );
    exit;

}
?>