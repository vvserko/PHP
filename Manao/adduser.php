<?php

require_once 'User.php';

require_once './remove_utf8_bom.php';

if (!$_POST) {
    exit('No direct script access allowed');
}

$userLogin = $_POST["login"];
$userPassword = $_POST['password'];
$userConfirmPassword = $_POST['confirm_password'];
$userEmail = $_POST['email'];
$userName = $_POST['name'];

$userLogin = trim($userLogin);
$userPassword = trim($userPassword);
$userConfirmPassword = trim($userConfirmPassword);
$userEmail = trim($userEmail);
$userName = trim($userName);

$jsonArray = [];
$newUser = new User($userLogin, $userPassword, $userConfirmPassword, $userEmail, $userName);

//Если файл существует - получаем его содержимое
if (file_exists('json.json')) {
    $json = file_get_contents('json.json');
    
    $jsonArray = json_decode($json, true); //ассоц массив
}
// Делаем запись в файл
if ($userLogin) {
    $userObject=$newUser;
    $jsonArray[$userLogin] = $userObject;
    $result = file_put_contents('json.json', json_encode($jsonArray, JSON_FORCE_OBJECT));
}
echo $result;

