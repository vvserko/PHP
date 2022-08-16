<?php
require_once './Person.php';

if (isset($_POST["id"]) && isset($_POST["username"]) && isset($_POST["surname"]) && isset($_POST["date"]) &&
        isset($_POST["gender"]) && isset($_POST["city"])) {

    $conn = new mysqli("localhost", "root", "", "style");
    if ($conn->connect_error) {
        die("Ошибка: " . $conn->connect_error);
    }
    $id = $conn->real_escape_string($_POST["id"]);
    $name = $conn->real_escape_string($_POST["username"]);
    $surname = $conn->real_escape_string($_POST["surname"]);
    $date = $conn->real_escape_string($_POST["date"]);
    $gender = $conn->real_escape_string($_POST["gender"]);
    $city = $conn->real_escape_string($_POST["city"]);
    $person = new Person($id, $name, $surname, $date, $gender, $city);
    $sql = "INSERT INTO people (id, name, surname, date,gender, city) VALUES "
            . "('$person->id','$person->personName', '$person->personSurname', '$person->personBirthday', "
            . "'$person->personGender', '$person->personCity')";
    if ($conn->query($sql)) {
        echo "Данные успешно добавлены";
    } else {
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();
    echo Person::birthdayToAge();
}
?>