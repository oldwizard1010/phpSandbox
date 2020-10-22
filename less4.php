<DOCTYPE html>
	<ol>
	<li>task1: IsInRange?<br>
	<?php
	define("MIN", 10);
	define("MAX", 50);
	$x = rand(0, 100);
	if ($x < MIN){
		echo "$x is below range";
	}
	elseif($x > MAX){
		echo "$x is above range";
	}
	else{
		echo "$x is in range between MIN and MAX";
	}
	echo "<br> Min = ". MIN ." Max = " . MAX;
	?>
	</li>
	<br>
	<li>task2: SquareEquasion<br>
	<?php
	$a = rand(-50, 50);
	$b = rand(-50, 50);
	$c = rand(-50, 50);
	if ($a == 0) $a++;
	echo $a.'x^2 + '. $b. 'x +'. $c. ' = 0';
	$D = $b^2 - 4*$a*$c;
	if ($D < 0){
		echo "<br>X doesn't exist";
	}
	elseif ($D == 0){
		echo "X = ". (-$b)/(2*$a);
	}
	else{
		echo '<br>X1 = '. (-$b + sqrt($D))/(2*$a) . '<br> X2 = '. (-$b - sqrt($D))/(2*$a);
	}
	?>
	</li>
	<br>
	<li>task3: MiddleNumber<br>
	<?php
	$a = rand(0, 10);
	$b = rand(0, 10);
	$c = rand(0, 10);
	$mid;
	echo 'a = '. $a. '<br>b = '. $b.'<br>c = '. $c.'<br>';
	if ($a == $b || $b == $c || $c == $a){
		echo 'Error: there are equal numbers';
	}
	else{
	if (($a > $b && $a < $c) || ($a < $b && $a > $c))
		$mid = &$a;
	elseif (($b > $a && $b < $c) || ($b < $a && $b > $c))
		$mid = &$b;
	else
		$mid = &$c;
	echo 'Middle number is ='. $mid;
	}
	?>
	</li>
	</ol>
