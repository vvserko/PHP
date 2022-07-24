<?php

function password_validation($data) {
    $pattern_password = "/^[a-zа-я0-9]{8,20}$/";
    $data = trim($data);
    $data = str_replace(' ', '', $data);
    if (empty($data)) {
        return $result = '*Password is required*';
    } else if (strlen($data) >= 6) {
        if (preg_match($pattern_password, $data)) {
            return $result = $data;
        } else {
            return $result = 'Password must contain letters and numbers';
        }
    } else {
        return $result = 'Password length required more then 6 letters';
    }
}

$password = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result = password_validation($_POST['password']);
}
?>  