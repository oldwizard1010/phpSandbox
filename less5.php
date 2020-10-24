<!DOCTYPE html>
	<ol>
		<li>
		task1: CicleSum<br>
		<?php
		$i;
		$sum1 = 0;
		$sum2 = 0;
		for ($i = 1; $i <= 25; $i++){
			$sum1 += $i;
		}
		$i = 1;
		while ($i <= 25){
			$sum2 += $i++;
		}
		echo 'sum by for = '. $sum1.'<br> sum by while = '.$sum2;
		?>
		</li>
		<br>
		<li>task2: Squares<br>
		<form name="N" method="POST" action="<?=$_SERVER['PHP_SELF']?>">
		Number of squares:<input type="text" name="n">
		<input type="submit" value="Do it!">
		</form>
		<?php
		$n = $_POST['n'];
		for ($i = 1; $i <= $n; $i++){
			echo $i*$i . '<br>';
		}
		?>
		</li>
		<br>
		<li>
		task3: Menu array<br>
		<?php
		$menu = [];
		for ($i = 10; $i > 0; $i--){
			$menu[$i] = "Button# $i";
		}
		sort($menu, SORT_NATURAL);
		echo "<ul>\n";
		foreach ($menu as $key => $value){
			echo '<li><a href="#'. $key.'"><button>'. $value . '</button></a></li>' . "\n";
		}
		echo "</ul>";
		//var_dump($menu);
		
		/*echo "Natural order:<br>";
		for ($i = 0; $i < 10; $i++){
			$menu[$i] = '<button>Button#' . (string)($i+1) .  '</button><br>';
			echo $menu[$i];
		}
		print_r($menu);
		var_dump($menu);
		rsort($menu, SORT_NATURAL);
		echo "<br>Reverse order by rsort:<br>";
		for ($i = 0; $i < 10; $i++){
			echo $menu[$i];
		}
		var_dump($menu);*/ //previous version and tests, just for history
		
		?>
		</li>
		
