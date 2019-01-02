<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/27
 * Time: 10:05
 */

namespace app\index\controller;
use think\Collection;
use think\Request;

class Admin extends Collection
{
    public function haha(){

        $a = 'b';
        $b = '我爱php';
        echo $a;
        echo $b;
        echo $$a;


    }
    public function mine()
    {
        $request = Request::instance();
        echo $request->url();
    }


}