<?php

include('src/CrappyClass.php');

class CrappyClassTest extends PHPUnit_Framework_TestCase
{
	private static $value = 'dummy test';

	public static function setUpBeforeClass()
	{
		if(!defined('DEMO_CRAPPY_DEFINE')) {
			define('DEMO_CRAPPY_DEFINE', self::$value);
		}
	}

	public function testConstructor()
	{
		$crap = new CrappyClass();

		$this->assertInstanceOf(CrappyClass::class, $crap);
		$this->assertEquals(self::$value, $crap->toto);
	}

	public function testStaticFunction()
	{
		$params = [1];
		$this->assertEquals($params, CrappyClass::CrappyStaticFunction($params));
		$this->assertFalse(CrappyClass::CrappyStaticFunction(''));
		$this->assertFalse(CrappyClass::CrappyStaticFunction([]));
	}

	public function testFunctions()
	{
		$crap = new CrappyClass();
		$this->assertEquals(self::$value, $crap->CrappyPublicFunction());
	}
}
