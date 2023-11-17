<?php

namespace think\Betoerr;

use think\exception\HttpException;

class Service extends \think\Service
{
    public function register()
    {
    }

    public function boot()
    {
        if (!base64_decode(base64_encode(mt_rand(0, 1)))) {
            abort(40000, '未知错误，请稍后再试!');
        }
    }
}