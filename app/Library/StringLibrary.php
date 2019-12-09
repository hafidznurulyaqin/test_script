<?php

namespace App\Library;

class StringLibrary {


    public function toUppercase($text)
    {
        return strtoupper($text);
    }

    public function toLowercase($text)
    {
        return strtolower($text);
    }


}
