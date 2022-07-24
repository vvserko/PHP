<?php
$users=[];
require './User.php';
require './validation/login_validation.php';
if (!empty($_POST)) {
    $user = new User($_POST['login'], $_POST['password'], $_POST['email'], $_POST['name']);
    array_push($users, $user);

    // Переводим массив в JSON
    echo json_encode($users);
}
?>