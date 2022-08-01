<?php

function remove_utf8_bom($str) {
    return str_replace("\xEF\xBB\xBF", '', $str);
}

