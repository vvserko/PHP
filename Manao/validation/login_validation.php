<?php

function login_validation($data) {
    $data = trim($data);
    $data = str_replace(' ', '', $data);
    if (empty($data)) {
        return $result = '*Login is required*';
    } else if (strlen($data) >= 6) {
        return $result = '';
    } else {
        return $result = 'Login length required more then 6 letters';
    }
}

$result = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result = login_validation($_POST['login']);
}
?>  