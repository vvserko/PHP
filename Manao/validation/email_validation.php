<?php

function email_validation($data) {
    $pattern_email = "/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/";
    $data = trim($data);
    $data = str_replace(' ', '', $data);
    if (empty($data)) {
        return $result = '*Email is required*';
    } else if (preg_match($pattern_email, $data)) {
        return $result = $data;
    } else {
        return $result = 'Email is not valid';
    }
}

$email = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result = email_validation($_POST['email']);
}
?>  