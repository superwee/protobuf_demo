<?php

class Test extends BaseController
{
	public function index ($body)
	{
		#子消息体处理
		$message = new Message();
		$message->mergeFromString($body);
		$data = $message->serializeToJsonString();
		var_dump($data);
		//todo

		//response
		$res = new MessageResponse();
		$res->setCode(100);
		$res->setMsg('success');

		return $res->serializeToString();
	}
}
