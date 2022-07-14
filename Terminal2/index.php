

<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=cp1251" />
        <title></title>
        <!-- Только CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
              rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
              crossorigin="anonymous">
        <link href="./style.css" rel="stylesheet">
    </head>
    <body>
        <div class = "zak">
            <form action="check.php" method="post">
                <select name="pizza" id = 'pizza' class="form-select" aria-label="Пицца">
                    <option selected>Меню выбора пиццы</option>
                    <option  value="1" > <?php
                        $pdo = new PDO('mysql:dbname=pizzas;host=localhost', 'root', '');

                        $pzz = $pdo->prepare("SELECT * FROM pizza_data2");
                        try {
                            while ($pizza = $pzz->fetch()) {
                                echo $pizza['pizza_type'] . '</br>';
                            }
                        } catch (PDOException $e) {
                            echo 'Ошибка выполнения запроса' . $e->getMessage();
                        }
                        ?></option>
                    <option value="2" >Деревенская</option>
                    <option value="3" >Гавайская</option>
                    <option value="4" >Грибная</option>
                </select>

                <select name="size" id = 'size' class="form-select" aria-label="Размер">
                    <option selected>Размер, см</option>
                    <option  value="5" >21</option>
                    <option value="6"'>26</option>
                    <option value="7" >31</option>
                    <option value="8" >45</option>
                </select>

                <select name="sauce" id = 'sauce' class="form-select" aria-label="Соус">
                    <option selected>Меню выбора соуса</option>
                    <option  value="9" >Сырный</option>
                    <option value="10" >Кисло-сладкий</option>
                    <option value="11" >Чесночный</option>
                    <option value="12" >Барбекю</option>
                </select>
                <input type="submit" value="Заказать">

            </form>
        </div>
    </body
</html>
