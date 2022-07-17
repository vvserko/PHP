<?php

$login = 'login не определен';
$password = 'пароль не введен';
$confirm_password = 'Подтверждение пароля не введено';
$email = 'Email не введен';
$name = 'Имя не введено';

if(isset(_POST['login'], _POST['password'],_POST['confirm_password'],_POST['email'],_POST['name'] )){
    $login=_POST['login'];
} else {
    echo $login;
};

