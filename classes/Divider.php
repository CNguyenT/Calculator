<?php

class Divider implements IOperator {
	public function run($number, $result) {
		return $result / $number;
	}
}