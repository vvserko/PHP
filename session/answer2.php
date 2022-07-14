
<?php
session_start();

$answer1 = $_POST['answer1'];
echo $answer1;
$_SESSION['answer1']=$answer1;
?>

<p>Вопрос 2</p>
<p>3 + 3 = ?</p>
<form action="answer3.php" method="post">
    <input type="text" name="answer2"/>
    <input type="submit"/>
</form>
