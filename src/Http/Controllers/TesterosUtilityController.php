<?php

namespace Harveywd\TesterosUtility\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Exceptions\UrlGenerationException;
use Illuminate\Support\Facades\Cookie;

class TesterosUtilityController
{
    /**
     * @param $cookieName
     * @return string
     */
    public function getCookie($cookieName)
    {
        return Cookie::get($cookieName);
    }

    /**
     * @param Request $request
     * @param $routeName
     * @return \Illuminate\Http\JsonResponse
     */
    public function getRoute(Request $request, $routeName)
    {
        try {
            $route = route($routeName, $request->toArray());

            return response()
                ->json($route);
        } catch (\Exception $e) {
            return response()
                ->json(false);
        }
    }
}