<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index($a,$b)
    {
        return $a.$b;
        return 'method index coba controller';
    }
}
