<?php
namespace app\index\controller;
use think\Collection;
use \think\ Request;
class Index extends Collection
{
    public function index()
    {
        return view();
    }
    public function mine()
    {
        $request = Request::instance();
        echo $request->url();
    }
}
