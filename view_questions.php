<?php
include("../config/db.php");
session_start();

if(!isset($_SESSION['admin'])){
header("Location: login.php");
}

$res=mysqli_query($conn,"SELECT * FROM questions");
?>

<table border="1">
<tr>
<th>ID</th><th>Question</th><th>Answer</th><th>Delete</th>
</tr>

<?php while($r=mysqli_fetch_assoc($res)){ ?>

<tr>
<td><?= $r['id'] ?></td>
<td><?= $r['question'] ?></td>
<td><?= $r['correct'] ?></td>
<td><a href="delete.php?id=<?= $r['id'] ?>">Delete</a></td>
</tr>

<?php } ?>
</table>