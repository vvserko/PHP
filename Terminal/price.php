<?php

function price($arr) {
$arr_price = [
    'pizza' => ['Пепперрони' => 20, 'Деревенская' => 30, 'Гавайская' => 40, 'Грибная' => 50],
    'size' => [21 => 60, 26 => 70, 31 => 80, 45 => 90],
    'sauce' => ['Сырный' => 100, 'Кисло-сладкий' => 110, 'Чесночный' => 120, 'Барбекю' => 130]
];
$pizza_value = $arr['pizza'];
$size_value = $arr['size'];
$sauce_value = $arr['sauce'];
return $arr_price['pizza'][$pizza_value]+$arr_price['size'][$size_value]+$arr_price['sauce'][$sauce_value];
}

