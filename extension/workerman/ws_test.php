<?php
use Workerman\Worker;
use Workerman\Lib\Timer;
require_once __DIR__ . '/workerman-for-win-master/Autoloader.php';

// 注意：这里与上个例子不通，使用的是websocket协议
$ws_worker = new Worker("websocket://0.0.0.0:2000");
$ws_worker->onWorkerStart = function($ws_worker){
    Timer::add(1, function()use($ws_worker){
        foreach($ws_worker->connections as $connection) {
            $connection->send('data ' . mt_rand(1, 1000));
        }
    });
};

/*


// 启动4个进程对外提供服务
$ws_worker->count = 4;

// 当收到客户端发来的数据后返回hello $data给客户端
$ws_worker->onMessage = function($connection, $data)
{
    // 向客户端发送hello $data
    $connection->send('hello2 ' . $data . mt_rand(1, 1000) . ' you uid is:' . $connection->uid);
};

*/
// 运行worker
Worker::runAll();