<?php

namespace Harveywd\TesterosUtility\Http\Controllers;


use Illuminate\Support\Facades\Cookie;

class TesterosUtilityController
{
    public function getCookie($cookieName)
    {
        return Cookie::get($cookieName);
    }
}