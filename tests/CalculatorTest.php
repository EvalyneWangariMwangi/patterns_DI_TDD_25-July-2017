<?php declare(strict_types=1); 

/**
* inheriting test classes
*/

use PHPUnit\Framework\TestCase;
class CalculatorTest extends TestCase
{

	private $calculator;

	protected function setUp(){
		// require_once'/src/Calculator.php';
		$this->calculator = new Calculator();
	}

	protected function tearDown(){
		$this->calculator = NULL;
	}
	
	//test addition
	public function testadd(){
		$equals = $this->calculator->add( 1, 2 );
		$this->assertEquals(3, $equals);
	}

	//test substraction
	public function testSubstract(){
		$equals = $this->calculator->subtract( 2, 1 );
		$this->assertEquals(1, $equals);
	}

	//test division
	public function testDivision(){
		$equals = $this->calculator->divide( 10, 2 );
		$this->assertEquals(5, $equals);
	}

	//test multiplication
	public function testMultiplication(){
		$equals = $this->calculator->multiple( 1, 2 );
		$this->assertEquals(2, $equals);
	}

}

 ?>