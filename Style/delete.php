
<?php

require_once './Person.php';

if (isset($_POST["id"])) {

    $conn = new mysqli("localhost", "root", "", "style");
    if ($conn->connect_error) {
        die("Ошибка: " . $conn->connect_error);
    }
    $id = $conn->real_escape_string($_POST["id"]);
    
    
     
    $sql = "DELETE FROM people WHERE id=$id";
    if ($conn->query($sql)) {
        echo "Данные успешно удалены";
    } else {
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();
}
?>