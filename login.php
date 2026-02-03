<?php
session_start();

if(isset($_POST['login'])){
$u=$_POST['username'];
$p=$_POST['password'];

if($u=="admin" && $p=="admin123"){
$_SESSION['admin']="yes";
header("Location: dashboard.php");
}else{
echo "Wrong Login";
}
}
?>

<form method="POST">
<h2>Admin Login</h2>
<input name="username"><br><br>
<input type="password" name="password"><br><br>
<button name="login">Login</button>
</form>