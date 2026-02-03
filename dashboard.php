<?php
session_start();
if(!isset($_SESSION['admin'])){
header("Location: login.php");
}
?>

<h2>Admin Panel</h2>
<a href="add_question.php">Add Question</a><br><br>
<a href="view_questions.php">View Questions</a><br><br>
<a href="logout.php">Logout</a>