<?php

namespace pidan\captcha;

use pidan\Route;
use pidan\Service;
use pidan\Validate;

class CaptchaService extends Service
{
    public function boot()
    {
        Validate::maker(function ($validate) {
            $validate->extend('captcha', function ($value) {
                return captcha_check($value);
            }, ':attribute错误!');
        });

        $this->registerRoutes(function (Route $route) {
            $route->get('captcha/[:config]', "\\pidan\\captcha\\CaptchaController@index");
        });
    }
}
