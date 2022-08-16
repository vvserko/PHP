<?php

require_once './Person.php';

if (!$_POST) {
    exit('No direct script access allowed');
} else {
    $con = mysqli_connect('localhost', 'root', '', 'style');
    if ($con == false) {
        print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
    } else {
        print("Соединение установлено успешно");
    }

    mysqli_set_charset($con, 'utf8');
    $personName = $con->real_escape_string($_POST['name']);
    $personSurname = $con->real_escape_string($_POST['surname']);
    $personBirthday = $con->real_escape_string($_POST['date']);
    $personGender = $con->real_escape_string($_POST['gender']);
    $personCity = $con->real_escape_string($_POST['city']);

    $person = new Person($personName, $personSurname, $personBirthday,
            $personGender, $personCity);
    $query = "INSERT INTO people (id, name, surname, birthday, gender, city)"
            . "values(4, $person->personName, $person->personSurname, $person->personBirthday, "
            . "$person->personGender, $person->personCity);";
  
    
    echo '<pre>';
    print_r($person);
    echo '<pre/>';
    $result = mysqli_query($con, $query);

    if ($result == false) {
        echo("Произошла ошибка при выполнении запроса");
        echo mysqli_connect_error();
    }
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

