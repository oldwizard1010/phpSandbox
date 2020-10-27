<!DOCTYPE html>

<ol>
	<li>
	task1 - GetCartPrice Function:<br>
		<?php
		$products = array(
		array('name' => 'Телевизор', 'price' => '400', 'quantity' => 1),
		array('name' => 'Телефон', 'price' => '300', 'quantity' => 3),
		array('name' => 'Кроссовки', 'price' => '150', 'quantity' => 2),
		);
		/*$itemCount = 0;
		$price = 0;
		foreach ($products as list('price' => $a, 'quantity' => $b)){
			$itemCount+= $b;
			$price += $a*$b;
		}*/ //moved to function, left for history
		$cart = getCartPrice($products);
		echo 'You have chosen '. $cart['count'] . ' items, your price is '. $cart['price'] . "\n";
		/*foreach ($products as $item){
		echo '<pre>';
		print_r($item);
		echo '</pre>';
		}*/ //don't need it anymore, printed cart, left for history.

		function getCartPrice(array $products){
			$itemCount = 0;
			$price = 0;
			foreach ($products as list('price' => $a, 'quantity' => $b)){
				$itemCount+= $b;
				$price += $a*$b;
			}
			return array('count' => $itemCount, 'price' => $price);
		}
		?>
	</li>
	<br>
	<li>
	task2 - GetSquareX function:<br>
	<?php
	$a = rand(-50, 50);
	$b = rand(-50, 50);
	$c = rand(-50, 50);
	if ($a == 0) $a++;
	echo $a.'x^2 + '. $b. 'x +'. $c. ' = 0<br>';
	$result = solveSquare($a, $b, $c);
	var_dump($result);
	
	function solveSquare($a, $b, $c){
		$D = $b*$b - 4*$a*$c;
		if ($D < 0){
		return false;
	}
	elseif ($D == 0){
		return ((-$b)/(2*$a));
	}
	else{
		return array((-$b + sqrt($D))/(2*$a) , (-$b - sqrt($D))/(2*$a));
	}
	}
	?>
	</li>
	<br>
	<li>
	task3 - deleteNegtives:<br>
	<?php
	$digits = array(2, -4, 60, -10, 200, 1.6, -3.8);
	var_dump($digits);
	echo '<br>';
	$digits = deleteNegtives($digits);
	var_dump($digits);
	
	function deleteNegtives(array $numbers){
		foreach ($numbers as $key => $value){
			if ($value < 0)
			unset ($numbers[$key]);
		}
		return ($numbers);
	}
	?>
	</li>
	<br>
	<li>
	task4 = deleteNegtives v2:<br>
	<?php
		$digits = array(2, -4, 60, -10, 200, 1.6, -3.8);
	var_dump($digits);
	echo '<br>';
	deleteNegtives2($digits);
	var_dump($digits);
	
	function deleteNegtives2(array &$numbers){
		foreach ($numbers as $key => $value){
			if ($value < 0)
			unset ($numbers[$key]);
		}
	}
	?>
	</li>
</ol>
