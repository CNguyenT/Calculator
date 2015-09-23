<?php

class Multiplier implements IOperator {
	public function run($number, $result) {
		return $result * $number;
	}
}