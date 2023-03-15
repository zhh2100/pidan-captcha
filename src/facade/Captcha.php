<?php

namespace pidan\captcha\facade;

use pidan\Facade;

/**
 * Class Captcha
 * @package pidan\captcha\facade
 * @mixin \pidan\captcha\Captcha
 */
class Captcha extends Facade
{
    protected static function getFacadeClass()
    {
        return \pidan\captcha\Captcha::class;
    }
}
