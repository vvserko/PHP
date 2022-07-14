
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Только CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link href="./style.css" rel="stylesheet">
    </head>
    <body>
        <div class = "check">
            <?php
            require_once './price.php';
            if (empty($_POST)) {
                exit('Данные не заполнены');
            } else {
                $result = price($_POST);
            }
            ?>
            <h4>Заказ </h4>
            <p>Пицца: <?php echo "{$_POST['pizza']} ;</br>"; ?> </p>
            <p>Размер: <?php echo "{$_POST['size']} ;</br>"; ?> </p>
            <p>Соус: <?php echo "{$_POST['sauce']} ;</br>"; ?> </p>
            <b>Стоимость заказа: <?php echo "$result руб.;</br>"; ?> </b>


        </div>
    </body
</html>
