<?php 

require_once __DIR__ . "/../../../vendor/autoload.php";

class Problem3Test extends PHPUnit_Framework_TestCase {
	
    /**
     * @test
     */
    public function checkResult() {
        $solver = new \Euler\Problem3Solver();

        $result = $solver->solve();

        $this->assertEquals(6857, $result);
    }
}

?>