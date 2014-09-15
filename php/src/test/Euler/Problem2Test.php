<?php 

require_once __DIR__ . "/../../../vendor/autoload.php";

class Problem2Test extends PHPUnit_Framework_TestCase {
	
    /**
     * @test
     */
    public function checkResult() {
        $solver = new \Euler\Problem2Solver();

        $result = $solver->solve();

        $this->assertEquals(4613732, $result);
    }
}

?>