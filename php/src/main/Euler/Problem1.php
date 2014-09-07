<?php 

/*
 * If we list all the natural numbers below 10 that are multiples of 3 or 5, 
 * we get 3, 5, 6 and 9. The sum of these multiples is 23.
 * Find the sum of all the multiples of 3 or 5 below 1000.
 */

namespace Euler;

require_once __DIR__ . "/../../../vendor/autoload.php";

class Problem1 {
	
	/**
	 * check given num is multiple of muls
	 * return True if one of muls hit
	 * 
	 * @param integer $num
	 * @param array $muls
	 * @return boolean
	 */
	private function is_multiple($num, array $muls) {
		foreach ($muls as $mul) {
			if ($num % $mul == 0) return True;
		}
		return False;
	}

	/**
	 * sumup all the number which is multiple of muls from 1 to end
	 * 
	 * @param integer $end
	 * @param array $muls
	 * @return number
	 */
	public function sum_all_multiples($end, array $muls) {
		$sum = 0;
		for ($i = 1; $i <= $end; $i++) {
			if ($this->is_multiple($i, $muls)) $sum += $i;
		}
		return $sum;
	}
}


?>