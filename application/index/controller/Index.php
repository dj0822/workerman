<?php

namespace app\index\controller;

use think\Collection;

class Index extends Collection
{
    public function index()
    {
        $name = input('name');
        return view('index', [
            'name' => $name ? $name : 'thinkphp'
        ]);
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
