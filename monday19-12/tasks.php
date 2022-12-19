<!-- 1.	create a form and send email and password, in the action page you will determine if the data is sent by get or post  -->

<!DOCTYPE HTML>
<html>  
<body>

<form action="tasks.php" method="post">
 <input type="text" name="email"><br>
 <input type="password" name="password"><br>
<input type="submit">
</form>

</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // The form was submitted using the POST method
    $email = $_POST['email'];
    $password = $_POST['password'];
}
?>
