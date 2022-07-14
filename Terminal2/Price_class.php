<?php

require_once './Pizza.php';

class Price_class extends Pizza {

  
    function sum() {
        return $this->pizza + $this->sauce + $this->size;
    }

}
