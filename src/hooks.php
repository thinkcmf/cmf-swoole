<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2019 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 老猫 <thinkcmf@126.com>
// +----------------------------------------------------------------------
return [
    'swoole_server_start'       => [
        "type"        => 1,//钩子类型(默认为应用钩子;1:核心钩子;2:应用钩子;3:模板钩子;4:后台模板钩子)
        "name"        => 'Swoole服务器开启', // 钩子名称
        "description" => "Swoole服务器开启", //钩子描述
        "once"        => 0 // 是否只执行一次
    ],
    'swoole_worker_start'       => [
        "type"        => 1,//钩子类型(默认为应用钩子;1:核心钩子;2:应用钩子;3:模板钩子;4:后台模板钩子)
        "name"        => 'Swoole worker进程开启', // 钩子名称
        "description" => "Swoole worker进程开启", //钩子描述
        "once"        => 0 // 是否只执行一次
    ],
    'swoole_websocket_on_open'  => [
        "type"        => 1,//钩子类型(默认为应用钩子;1:核心钩子;2:应用钩子;3:模板钩子;4:后台模板钩子)
        "name"        => 'Swoole WebSocket打开事件', // 钩子名称
        "description" => "Swoole WebSocket打开事件", //钩子描述
        "once"        => 0 // 是否只执行一次
    ],
    'swoole_websocket_on_close' => [
        "type"        => 1,//钩子类型(默认为应用钩子;1:核心钩子;2:应用钩子;3:模板钩子;4:后台模板钩子)
        "name"        => 'Swoole WebSocket断开事件', // 钩子名称
        "description" => "Swoole WebSocket断开事件", //钩子描述
        "once"        => 0 // 是否只执行一次
    ],
];