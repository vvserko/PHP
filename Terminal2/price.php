<?php

require_once './connect_db.php';

function price($id) {

    if ($id) {

        $result = $db->query('SELECT * FROM pizzas WHERE id=' . $id);
        $pizza_item = $result->fetch();
       
       return $pizza_item;
    }
}
