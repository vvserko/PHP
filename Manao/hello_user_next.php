<?php
session_start();
echo "<h2>Page 2</h2><br>";
if (isset($_COOKIE['login_cookies'])) {
    echo "<h1> Hello," . $_COOKIE['login_cookies'] . "!!!</h1> <p>- это куки</p> ";
    echo "<h3> Hello," . $_SESSION['login_session'] . "!!!</h1> - это сессии <br>";
} else {
    echo "<h1>Hello, guest</h1><br>";
}
?>
<br/>
<form method = "post" action="./delete_cookies.php">
    <input type = "submit" name = "exit" id = "exit" value = "Выйти" /><br/>
</form>
