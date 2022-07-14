
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>
            
        </title>
        <!-- Только CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
              rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
              crossorigin="anonymous">
        <link href="./style.css" rel="stylesheet">
        <script src="js/jquery-2.2.3.min.js"></script>
    </head>
    <body>
        <div class = "check">          
            <?php
            if (empty($_POST)) {
                exit('Данные не заполнены');
            }

            try {
                $dbh = new PDO('mysql:dbname=pizzas;host=localhost', 'root', '');
            } catch (PDOException $e) {
                die($e->getMessage());
            }

            $sth = $dbh->prepare("SELECT * FROM `pizza_data` WHERE `id` = :id");
            $sth->execute(array('id' => $_POST['pizza']));
            $array = $sth->fetch(PDO::FETCH_ASSOC);

            $sth = $dbh->prepare("SELECT * FROM `pizza_data` WHERE `id` = :id");
            $sth->execute(array('id' => $_POST['sauce']));
            $array2 = $sth->fetch(PDO::FETCH_ASSOC);

            $sth = $dbh->prepare("SELECT * FROM `pizza_data` WHERE `id` = :id");
            $sth->execute(array('id' => $_POST['size']));
            $array3 = $sth->fetch(PDO::FETCH_ASSOC);

            //$sum = $array['price']+$array2['price']+$array3['price'];
            require_once './Price_class.php';
            require_once './Pizza.php';
            $price_classObj = new Price_class($array['price'], $array2['price'], $array3['price']);

            include_once './configDb.php';
            include_once './function.php';
            $data = file_get_contents(LINK);
            $course = json_decode($data, true);
            $curr_course = $course['Cur_OfficialRate'];
            //print_arr($course);
            echo 'Курс доллара на ' . date('Y-m-d') . ':  ' . "<b>$curr_course</b>";

            $sum = $curr_course * ($price_classObj->sum($array['price'], $array3['price'], $array2['price']));
            ?>

            <h4>Заказ </h4>     
            <p>Пицца: <?php echo "{$array['item']} ;</br>"; ?> </p>
            <p>Размер: <?php echo "{$array3['item']} см.;</br>"; ?> </p>
            <p>Соус: <?php echo "{$array2['item']} ;</br>"; ?> </p>
            <b>Стоимость заказа: <?php echo "$sum руб.;" ?> </b>

        </div>
    </body  
</html>
