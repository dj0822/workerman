<?php


namespace app\index\controller;


use think\facade\Env;
use think\worker\command\Server;


class Worker extends Server
{

    public function onMessage($connection, $data)
    {
        $connection->send('receive success');
    }


}