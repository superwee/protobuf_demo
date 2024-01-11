<?php

use Workerman\Worker;
use Workerman\Connection\TcpConnection;
define('DIR_PATH',  __DIR__);
define('APP_DIR', __DIR__ . '/app');
define('CONTROLLER_DIR',  __DIR__ . '/app/websocket/');

require_once DIR_PATH . '/vendor/autoload.php';
require_once DIR_PATH . '/app/Application.php';


$worker = new Worker('websocket://0.0.0.0:1235');
$worker->count = 1;

$worker->onConnect = function (TcpConnection $connection) {

	echo "new connection from ip " . $connection->getRemoteIp() . "\n";

};

$worker->onClose = function (TcpConnection $connection) {

};

$worker->onMessage = function(TcpConnection $connection, $req_data)
{
	var_dump('input:'.$req_data);
	$data = explode("\r\n", $req_data);
	$app = new Application();
	// $response = $app->run(current($data));
	$response = $app->run(base64_decode($data[0]));
	var_dump('output:'.$response);
    $connection->send(base64_encode($response));
};


//广播
function broadcast($message) {
	global $worker;
	foreach ($worker->connections as $connection) {
		$connection->send(base64_encode($message));
	}
}

//单人发
function send_message_by_id($id, $message) {
	global $worker;
	if (isset($worker->connections[$id])) {
		$connection = $worker->connections[$id];
		var_dump($connection->id);
		$connection->send(base64_encode($message));
	}
}

// 运行worker
Worker::runAll();
