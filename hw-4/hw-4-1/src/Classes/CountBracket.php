<?php


namespace Classes;


class CountBracket
{

    // Проверяем количество открывающих скобок. Если соответствует указанному значению, возвращаем true.
    public static function brackets_count ($string)
    {
        $arr = trim($string);

        if ( substr_count($arr, '(') === 20 && substr_count($arr, ')') === 21 ) {
            return true;
        }

        return false;
    }

}