<?php
session_start();
$answer1 = $_SESSION['answer1'];
$answer2 = $_SESSION['answer2'];
$answer3 = $_POST['answer3'];
$result = $answer1 + $answer2 + $answer3;
echo session_id();
echo "<br/>";
echo "session_name = ". session_name();

?>
<p>Ваш результат сложения <?php echo $result ?></p>