<?php

abstract class Pizza {

    public $pizza;
    public $sauce;
    public $size;

    function __construct($pizza, $sauce, $size) {
        $this->pizza = $pizza;
        $this->sauce = $sauce;
        $this->size = $size;
    }

}
