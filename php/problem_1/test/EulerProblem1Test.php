<?php 

require '../EulerProblem1.php';

class EularProblem1Test extends PHPUnit_Framework_TestCase {
	
	/**
	 * @test
	 */
	public function checkResult() {
		$solver = new EulerProblem1();
		
		$result = $solver->sum_all_multiples(1000, array(3, 5));
		
		$this->assertEquals(233168, $result);
	}
}

?>