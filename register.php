<?php
include("config/db.php");

if(isset($_POST['reg'])){
$n=$_POST['name'];
$e=$_POST['email'];
$p=$_POST['password'];

mysqli_query($conn,
"INSERT INTO users(name,email,password)
VALUES('$n','$e','$p')");

echo "Registered Successfully";
}
?>

<form method="POST">
<h2>Register</h2>
<input name="name" required><br><br>
<input name="email" required><br><br>
<input type="password" name="password" required><br><br>
<button name="reg">Register</button>
</form>