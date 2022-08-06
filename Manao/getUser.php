<?php

session_start();
if (!$_POST) {
    exit('No direct script access allowed');
}
//проверить является ли запрос AJAX
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

    $userAuthLogin = trim($_POST["auth_login"]);
    $userAuthPassword = trim($_POST["auth_password"]);

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
    if (in_array($userAuthLogin, $arr_users_logins) === false &&
            in_array(md5($userAuthPassword), $arr_users_passwords) === false) {
        header('Content-Type: application/json');
        json_encode($jsonArray);
        $json = json_encode('Lgn_pasw_incorr');
        echo $json;
    } else {
        if (in_array($userAuthLogin, $arr_users_logins) === true &&
                in_array(md5($userAuthPassword), $arr_users_passwords) === false) {
            header('Content-Type: application/json');
            json_encode($jsonArray);
            $json = json_encode('Pasw_incorr');
            echo $json;
        } else if (in_array($userAuthLogin, $arr_users_logins) === true &&
                in_array(md5($userAuthPassword), $arr_users_passwords) === true) {
            header('Content-Type: application/json');
            json_encode($jsonArray);
            $json = json_encode('OK');
            setcookie("login", $jsonArray[$userAuthLogin]['userLogin']);
            $_SESSION[$userAuthLogin] = $jsonArray[$userAuthLogin];
            echo $json;
        }
    }
} else {
    exit();
}
?>



