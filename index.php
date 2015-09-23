<?php

/*
 * ******************************
 * 	AUTOLOADING
 * ******************************
 * We can see that this block of code can quickly become
 * cumbersome. This can be fixed with autoloading. 
 */

spl_autoload_register(function($class) {
	require_once "classes/{$class}.php";
});

// require_once 'classes/Calculator.php';
// require_once 'classes/IOperator.php';
// require_once 'classes/Adder.php';
// require_once 'classes/Subtractor.php';
// require_once 'classes/Multiplier.php';
// require_once 'classes/Divider.php';

//no paranthesis needed bc we're not passing anything into it
// $calc = new Calculator();

// $calc->setOperation(new Adder());
// $calc->calculate(10, 50, 10);//add 10 and 50

// $calc->setOperation(new Subtractor());
// $calc->calculate(30);//subtract 30 from the result

// $calc->setOperation(new Multiplier());
// $calc->calculate(5);//multiply result by 5

// $calc->setOperation(new Divider());
// $calc->calculate(2);//divide result by 2

// echo $calc->getResult();

?>

<!DOCTYPE html>

<html>

<head>
	<title>Calculator</title>
	<link rel="stylesheet" href="css/main.css">	
</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<!-- heading -->
		<h1 class="heading">Calculator</h1>
		
		<!-- display numbers
			we want this to display numbers we enter
			and the operation result -->
		<textarea rows="3" readonly="readonly" name="display">			
			<?php 				
				$textDisplay = '';
				
				if (!empty($_POST['num'])) {
					if ($_POST['num'] === '0') {
						$num = '0';
					} else {
						$num = $_POST['num'];
					}
					
					//concatenate each number pressed to the display
					$textDisplay = $textDisplay . $num;	
					echo 'concatenating';				
				} else if (!isset($textDisplay)) {
					//initialize $textDisplay for the first time				
					$textDisplay = '';		
					echo 'initializing 1st time';			
				}
				
				echo $textDisplay;
			?>
		</textarea>
		
		<!-- number pad -->
		<form id="buttonpad" class="num-buttons" action="index.php" method="post">
			<input type="submit" value="1" name="num">
			<input type="submit" value="2" name="num">
			<input type="submit" value="3" name="num">
			<input type="submit" value="Clear" name="key">
			</br>
			<input type="submit" value="4" name="num">
			<input type="submit" value="5" name="num">
			<input type="submit" value="6" name="num">
			<input type="submit" value="Delete" name="key">		
			</br>
			<input type="submit" value="7" name="num">
			<input type="submit" value="8" name="num">
			<input type="submit" value="9" name="num">
			<input type="submit" value="+" name="op">
			</br>
			<input type="submit" value="0" name="num">	
			<input type="submit" value="." name="num">
			<input type="submit" value="=" name="key">					
			<input type="submit" value="-" name="op">
			</br>
			<input type="submit" value="+/-">
			<input type="submit" value="()">
			<input type="submit" value="*" name="op">
			<input type="submit" value="/" name="op">					
		</form>
	</div>
</body>
</html>