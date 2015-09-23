<?php

class Adder implements IOperator {
	public function run($number, $result) {
		return $result + $number;
	}
}