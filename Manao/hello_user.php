<?php

if (isset($_COOKIE['login'])) {
    echo "<h1> Hello," . $_COOKIE['login'] . "!!!</h1>";
} else {
    echo "<h1>Hello, user</h1>";
}
?>
<form method = "post" action="/MANAO/index.php">
    <input type = "submit" name = "exit" id = "exit" value = "Выйти" /><br/>
</form>
