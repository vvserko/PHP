<?php

function name_validation($data) {
    $pattern_name = "/^[a-zA-Z]{1,2}$/";
    $data = trim($data);
    $data = str_replace(' ', '', $data);
    if (empty($data)) {
        return $result = '*Name is required*';
    } else if (strlen($data) <= 2) {
        if (preg_match($pattern_name, $data)) {
            return $result = $data;
        }
    } else {
        return $result = 'Name is not valid';
    }
}

$name = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result = name_validation($_POST['name']);
}
?> 