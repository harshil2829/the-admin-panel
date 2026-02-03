<?php
include("config/db.php");
$score=0;

foreach($_POST['ans'] as $id=>$ans){
$q=mysqli_query($conn,"SELECT correct FROM questions WHERE id=$id");
$r=mysqli_fetch_assoc($q);

if($r['correct']==$ans){
$score++;
}
}

echo "<h2>Your Score: $score</h2>";
echo "<a href='dashboard.php'>Back</a>";
?>