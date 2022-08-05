<?php

if (!$_POST) {
    exit('No direct script access allowed');
}

$userLogin = trim($_POST["login"]);
$userPassword = trim($_POST['password']);

//Если файл существует - получаем его содержимое
if (file_exists('json.json')) {
    $json = file_get_contents('json.json');
    $jsonArray = json_decode($json, true); //ассоц массив
}

//массив из значений login_ов И password_ов пользователей
$arr_users_logins = [];
$arr_users_passwords = [];
foreach ($jsonArray as $value) {
    $arr_users_logins[] = $value['userLogin'];
    $arr_users_passwords[] = $value['userPassword'];
}

//поиск : сущствует ли уже в массиве данный login и password
if (array_search($userLogin, $arr_users_logins) === false || array_search($userPassword, $arr_users_passwords) === false) {

    // если пользователя не существует сообщаем   
    header('Content-Type: application/json');
    $result = file_put_contents('json.json', json_encode($jsonArray));
    $json = json_encode('Login and password is incorrect.');
    echo $json;
} else {
    if (array_search($userLogin, $arr_users_logins) === true &&
            array_search($userPassword, $arr_users_passwords) === false) {

        header('Content-Type: application/json');
        $result = file_put_contents('json.json', json_encode($jsonArray));
        $json = json_encode('Password is incorrect.');
        echo $json;
    } else if (array_search($userLogin, $arr_users_logins) === false) {
        header('Content-Type: application/json');
        $result = file_put_contents('json.json', json_encode($jsonArray));
        $json = json_encode('Login is incorrect.');
        echo $json;
    }
}
