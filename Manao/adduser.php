<?php

require_once 'User.php';

require_once './remove_utf8_bom.php';

if (!$_POST) {
    exit('No direct script access allowed');
}

$userLogin = trim($_POST["login"]);
$userPassword = trim($_POST['password']);
$userConfirmPassword = trim($_POST['confirm_password']);
$userEmail = trim($_POST['email']);
$userName = trim($_POST['name']);

$jsonArray = [];
$newUser = new User($userLogin, $userPassword, $userConfirmPassword, $userEmail, $userName);

//Если файл существует - получаем его содержимое
if (file_exists('json.json')) {
    $json = file_get_contents('json.json');
    $jsonArray = json_decode($json, true); //ассоц массив
}

//массив из значений login_ов И email_ов пользователей
$arr_users_logins = [];
$arr_users_emails = [];
foreach ($jsonArray as $value) {
    $arr_users_logins[] = $value['userLogin'];
    $arr_users_emails[] = $value['userEmail'];
}

//поиск : сущствует ли уже в массиве данный login
if (array_search($userLogin, $arr_users_logins) === false && array_search($userEmail, $arr_users_emails) === false) {

    // если не существует записываем в файл И отдаем в validate.json
    $userObject = $newUser;
    $jsonArray[] = (array) $userObject;
    header('Content-Type: application/json');
    $result = file_put_contents('json.json', json_encode($jsonArray));
    $json = json_encode($jsonArray);
    echo $json;
} else {
    //Иначе отправляем сообщение, что пользователь существует
    if (array_search($userLogin, $arr_users_logins) === false && array_search($userEmail, $arr_users_emails)) {
        header('Content-Type: application/json');
        $result = file_put_contents('json.json', json_encode($jsonArray));
        $json = json_encode('Email is exist. Enter another email.');
        echo $json;
    } else {
        header('Content-Type: application/json');
        $result = file_put_contents('json.json', json_encode($jsonArray));
        $json = json_encode('Login is exist. Enter another login.');
        echo $json;
    }
}


