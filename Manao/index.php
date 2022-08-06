<?php
session_start();
if (isset($_POST['exit'])) {
    if (isset($_COOKIE)) {
        unset($_COOKIE['login']);
        setcookie('login', null, '/');
        //$_COOKIE = [];
        $_SESSION = [];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Start</title>   

        <link href="./style.css" rel="stylesheet">  
    </head>

    <body>         
        <form method="post" id="start_form" action="" >  
            <div>
                <button>
                    <a href="./registration.php" >Регистрация пользователя</a>
                </button>
                <br>
                <button>
                    <a href="./authorization.php" >Авторизация пользователя</a>
                </button>
            </div>
        </form>
    </body>
</html>