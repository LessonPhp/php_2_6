<?php

namespace App;

class Logger
{
    public static function getLog(\Exception $ex)
    {
        $res = file(__DIR__ . '/../log.txt');
        $res[] = ' | Ошибка: ' . $ex->getMessage() . ' | дата: ' . date('Y-m-d') . ' | время: ' . date('G:i:s');
        $str = implode("\n", $res);
        file_put_contents(__DIR__ . '/../log.txt', $str);
    }
}