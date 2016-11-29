<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Request;

class MenuHelper
{
    static function setActive($path)
    {
        return Request::is($path . '*') ? ' class=active' :  '123';
    }
}