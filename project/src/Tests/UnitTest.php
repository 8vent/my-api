<?php 

namespace App\Tests;

//require_once("../../autoloader.php");

use App\Models\GumBall;

use PHPUnit\Framework\TestCase;

class Unit extends TestCase
{

	private $gumballinstance;

	public function setUp()
	{
		$this->gumballinstance = new GumBall();
	}

	public function testWheel()
	{
		$this->gumballinstance->setBalls(100);

		$this->gumballinstance->turnWheel();

		$this->assertEquals(99, $this->gumballinstance->getBalls());
	}
}