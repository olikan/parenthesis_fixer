<?php

namespace src;

use InvalidArgumentException;

/**
 * Class Parenthesis
 * @package src
 */
class Parenthesis
{
    /**
     * @param string $string
     * @return bool
     */
    public static function hasMatched($string)
    {
        $len = strlen($string);
        $stack = [];

        for ($i = 0; $i < $len; $i++) {
            switch ($string[$i]) {
                case '(':
                    array_push($stack, 0);
                    break;
                case ')':
                    if (array_pop($stack) !== 0)
                        return false;
                    break;
                case (!preg_match('/(\s|\r|\n|\t)/', $string[$i]) ? true : false) :
                    throw new InvalidArgumentException('Execption only accepts parentehesis or special entities. Input was: ' . $string[$i]);
                    break;
                default:
                    break;
            }
        }

        return (empty($stack));
    }
}