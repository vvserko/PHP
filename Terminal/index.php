<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Только CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link href="./style.css" rel="stylesheet">
    </head>
    <body>
        <div class = "zak">
            <form action="check.php" method="post">
                <select name="pizza" id = 'pizza' class="form-select" aria-label="Пицца">
                    <option selected>Меню выбора пиццы</option>
                    <option  value="Пепперрони">Пепперрони</option>
                    <option value="Деревенская">Деревенская</option>
                    <option value="Гавайская">Гавайская</option>
                    <option value="Грибная">Грибная</option>
                </select>
                
                <select name="size" id = 'size' class="form-select" aria-label="Размер">
                    <option selected>Размер, см</option>
                    <option  value="21">21</option>
                    <option value="26">26</option>
                    <option value="31">31</option>
                    <option value="45">45</option>
                </select>
                
                <select name="sauce" id = 'sauce' class="form-select" aria-label="Соус">
                    <option selected>Меню выбора соуса</option>
                    <option  value="Сырный">Сырный</option>
                    <option value="Кисло-сладкий">Кисло-сладкий</option>
                    <option value="Чесночный">Чесночный</option>
                    <option value="Барбекю">Барбекю</option>
                </select>
                <input type="submit" value="Заказать">

            </form>
        </div>
    </body
</html>
