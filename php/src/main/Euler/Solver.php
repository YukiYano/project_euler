<?php 

namespace Euler;

require_once __DIR__ . "/../../../vendor/autoload.php";

abstract class Solver {

    /**
     * solve problem and return answer
     */
    abstract public function solve();
}

?>