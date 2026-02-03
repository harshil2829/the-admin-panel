<?php
session_start();
include("config/db.php");
$q = mysqli_query($conn,"SELECT * FROM questions ORDER BY RAND() LIMIT 5");
?>

<form method="POST" action="result.php">
<?php while($row=mysqli_fetch_assoc($q)){ ?>
<p><?= $row['question'] ?></p>

<input type="radio" name="ans[<?= $row['id'] ?>]" value="a"> <?= $row['a'] ?><br>
<input type="radio" name="ans[<?= $row['id'] ?>]" value="b"> <?= $row['b'] ?><br>
<input type="radio" name="ans[<?= $row['id'] ?>]" value="c"> <?= $row['c'] ?><br>
<input type="radio" name="ans[<?= $row['id'] ?>]" value="d"> <?= $row['d'] ?><br><br>
<?php } ?>

<button>Submit</button>
</form>