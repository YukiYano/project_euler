<?php 

require_once __DIR__ . "/../../../vendor/autoload.php";

class Problem1Test extends PHPUnit_Framework_TestCase {
	
	/**
	 * @test
	 */
	public function checkResult() {
		$solver = new \Euler\Problem1();
		
		$result = $solver->sum_all_multiples(999, array(3, 5));
		
		$this->assertEquals(233168, $result);
	}
}

?>