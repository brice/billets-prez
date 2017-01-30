<?php

class CrappyClass
{
	public function __construct()
	{
		$this->toto = DEMO_CRAPPY_DEFINE;
	}

	public static function CrappyStaticFunction($params)
	{
		if ($params) {
			return $params;
		}
		return false;
	}

	public function CrappyPublicFunction()
	{
		return $this->CrappyPrivateFunction();
	}

	private function CrappyPrivateFunction()
	{
		return $this->toto;
	}
}