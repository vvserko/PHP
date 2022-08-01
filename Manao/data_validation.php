<?php

require './validation/login_validation.php';
require './validation/password_validation.php';
require './validation/confirm_password_validation.php';
require './validation/email_validation.php';
require './validation/name_validation.php';

$result_login = '';
$result_password = '';
$result_confirm_password = $result_email = $result_name = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result_login = login_validation($_POST['login']);
    $result_password = password_validation($_POST['password']);
    $result_confirm_password = confirm_password_validation($_POST['password'], $_POST['confirm_password']);
    $result_email = email_validation($_POST['email']);
    $result_name = name_validation($_POST['name']);
}
?>  
