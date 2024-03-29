<?php
require_once DIR_PATH . '/protobuf/ProtoCode/autoload.php';
require_once CONTROLLER_DIR . '/controller_load.php';

class Application
{
	public function run ($req_data) {
		#请求消息体处理
		var_dump('app:'.$req_data);
		$request = new Request();
		$request->mergeFromString($req_data);
		$data = $request->serializeToJsonString();
		var_dump($data);
		$data = json_decode($data, true);
		$path = $data['path'] ?? '';
		$body = $data['body'] ?? '';
		if (empty ($path)) {
			//todo
			return false;
		}

		$path_arr = explode("/",  $path);
		$class_name = ucwords($path_arr[0]);
		$method_name = $path_arr[1];
		if (!class_exists($class_name) || !method_exists($class_name, $method_name)) {
			//todo
			return 404;
		}

		$response_data = call_user_func_array([$class_name, $method_name], [base64_decode($body)]);
		var_dump('response:' . $response_data);
		#返回消息体处理
		$response = $this->buildResponseMessage($path, $response_data);
		return $response;
	}

	private function buildResponseMessage($path, $response_data)
	{
		$response = new Response();
		$response->setPath($path);
		$response->setBody($response_data);
		return $response->serializeToString();
	}
}
