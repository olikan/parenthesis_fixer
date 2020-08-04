<?php

require_once __DIR__ . '/vendor/autoload.php';

$string = "(()()()()))((((()()()))(()()()(((()))))))";
$match = \src\Parenthesis::hasMatched($string);
var_dump($match);


