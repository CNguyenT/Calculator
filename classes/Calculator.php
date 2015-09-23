<?php

class Calculator {
	protected $result;
	protected $operation;
	
	/*
	 * ******************************
	 * 	DEPENDENCY INJECTION
	 * ******************************
	 * Pass an INTERFACE instead of a CLASS, this makes it so that
	 * we are not instantiating a new class inside the Calculator
	 * class each time.
	 * 
	 * !! Inject the interface, not the class !!
	 * 
	 * Gets rid of redundant objects
	 * Gets rid of tight coupling
	 */
	public function setOperation(IOperator $operation) {
		$this->operation = $operation;
	}
	
	public function calculate() {
		
		/*
		 * func_get_args() allows us to pass in as many arguments
		 * as we need, since calculators could very many or very little
		 * numbers.
		 * 
		 * !! Do not need any args defined in function name !!
		 */
		foreach (func_get_args() as $number) {
			$this->result = $this->operation->run($number, $this->result);
		}
		
		//returns args passed into calculate() in index.php
// 		print_r(func_get_args());
	}
	
	public function getResult() {
		return $this->result;
	}
}