<?php 

require_once __DIR__ . "/../../../vendor/autoload.php";

class Problem1Test extends PHPUnit_Framework_TestCase {
	
    /**
     * @test
     */
    public function checkResult() {
        $solver = new \Euler\Problem1Solver();

        $result = $solver->solve();

        $this->assertEquals(233168, $result);
    }
}

?>