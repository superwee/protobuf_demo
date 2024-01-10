<?php

class BaseController
{
	protected function json(array $data)
	{
		return json_encode($data);
	}
}
