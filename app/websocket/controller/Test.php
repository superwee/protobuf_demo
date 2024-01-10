<?php

class Test extends BaseController
{
	public function index ($body)
	{
		#子消息体处理
		$message = new Message();
		$message->mergeFromString($body);
		$data = $message->serializeToJsonString();

		return ['code' => 100, 'data' => json_decode($data, true)];
	}
}
