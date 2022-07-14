<?php

require_once './data.php';
foreach ($publication as $item) {
    echo '<pre>';
    print_r($item->printItem());
    echo '<pre/>';
    
}