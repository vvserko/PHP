<?php

function confirm_password_validation($data, $confirm_data) {
    if (empty($data)) {
        return $result = '*Confirm password is required*';
    } else if ($data != $confirm_data) {
        return $result = 'Passwords do not match';
    } else {
        return $result = $confirm_data;
    }
}

$confirm_password = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result = confirm_password_validation($_POST['password'], $_POST['confirm_password']);
}
?>  