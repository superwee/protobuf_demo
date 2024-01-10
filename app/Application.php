<?php
require_once DIR_PATH . '/protobuf/ProtoCode/autoload.php';
require_once DIR_PATH . '/app/websocket/controller_load.php';

class Application
{
	public function run ($req_data) {
		#请求消息体处理
		var_dump('app:'.$req_data);
		$requst = new Request();
		$requst->mergeFromString($req_data);
		$data = $requst->serializeToJsonString();
		$data = json_decode($data, true);
		$path = $data['path'] ?? '';
		$body = $data['body'] ?? '';
		if (empty ($path)) {
			return false;
		}

		$path_arr = explode("/",  $path);
		$class_name = ucwords($path_arr[0]);
		$method_name = $path_arr[1];
		if (!class_exists($class_name) || !method_exists($class_name, $method_name)) {
			return 404;
		}

		$response_data = call_user_func_array([$class_name, $method_name], [base64_decode($body)]);
		#返回消息体处理
		$response = new Response();
		$response->setCode($response_data['code']);
		$response->setData(json_encode($response_data['data']));
		$extra = $response_data['extra'] ?? '';
		$response->setExtra($extra);
		return $response->serializeToString();
	}
}
