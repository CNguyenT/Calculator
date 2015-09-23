<?php

class Subtractor implements IOperator {
	public function run($number, $result) {
		return $result - $number;
	}
}