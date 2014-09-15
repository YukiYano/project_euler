<?php 

/*
 * The prime factors of 13195 are 5, 7, 13 and 29.
 * What is the largest prime factor of the number 600851475143 ?
 */

namespace Euler;

require_once __DIR__ . "/../../../vendor/autoload.php";

class Problem3Solver extends \Euler\Solver {
    
    public function solve() {
        return $this->check_largest_prime_factor(600851475143);
    }
    
    /**
     * return largest prime factor of $target
     * 
     * @param integer $target
     */
    private function check_largest_prime_factor($target) {
        $prime_factor_list = array();
        $is_prime_map = array();

        var_dump("hoge");
        $rest = $target;
        while ($rest > 1) {
            for ($i=2; $i<=$rest; $i++) {
                if ($rest % $i == 0) {
                    $rest /= $i;
                    if (!isset($is_prime_map[$i])) $is_prime_map[$i] = $this->is_prime($i);
                    if ($is_prime_map[$i]) $prime_factor_list[] = $i;
                    break;
                }
            }
        }
        
        return end($prime_factor_list);
    }
    
    /**
     * return True if $num is prime
     * 
     * @param integer $num
     * @return boolean
     */
    private function is_prime($num) {
        if ($num < 2) return False;
        if ($num == 2) return True;
        if ($num % 2 == 0) return False;
        
        $max = sqrt($num);
        for ($i=3; $i<$max; $i+=2) {
            if ($num % $i == 0) return False;
        }
        return True;
    }
}

?>