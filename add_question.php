<?php
include("../config/db.php");
session_start();

if(!isset($_SESSION['admin'])){
header("Location: login.php");
}

if(isset($_POST['add'])){

$q=$_POST['q'];
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$ans=$_POST['ans'];

mysqli_query($conn,
"INSERT INTO questions(question,a,b,c,d,correct)
VALUES('$q','$a','$b','$c','$d','$ans')");

echo "Added!";
}
?>

<form method="POST">
<input name="q" placeholder="Question"><br><br>
<input name="a" placeholder="A"><br><br>
<input name="b" placeholder="B"><br><br>
<input name="c" placeholder="C"><br><br>
<input name="d" placeholder="D"><br><br>

<select name="ans">
<option value="a">A</option>
<option value="b">B</option>
<option value="c">C</option>
<option value="d">D</option>
</select><br><br>

<button name="add">Add</button>
</form>