<?php

if (!function_exists('generateRandomString')) {
    function generateRandomString($length = 2)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            if ($i == 0) {
                $randomString .= $characters[rand(0, 25)];
            } else {
                $randomString .= $characters[rand(0, 25)];
            }
        }
        return $randomString;
    }
}

if (!function_exists('generateRandomInteger')) {
    function generateRandomInteger($length = 1)
    {
        $characters = '1234567890';
        $randomInteger = '';
        $charLength = strlen($characters);
        for ($i = 0; $i < $length; $i++) {
            $randomInteger .= $characters[rand(0, $charLength - 1)];
        }
        return $randomInteger;
    }
}

