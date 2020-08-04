<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

use src\parenthesis;

$string = "(()()()()))((((()()()))(()()()(((()))))))";
var_dump(parenthesis::hasMatched($string));


