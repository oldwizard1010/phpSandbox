<DOCTYPE html>
	<ol>
	<li>task1 - ValueTypes:<br>
	<?php
	$a = 152;
	$b = '152';
	$c = 'London';
	$d = array(152);
	$e = 15.2;
	$f = false;
	$g = true;
	echo '<pre>';
	var_dump($a, $b, $c, $d, $e, $f, $g);
	echo '</pre>';
	?>
	</li>
	<br>
	<li>task2 - Strings&Values:<br>
	<?php
	$a = 10; $b = 56;
	echo "$a из {$b}ти студентов посетили лекцию";
	echo '<br>'.$a.' из '.$b.'ти студентов на лекциях не появлялись вовсе';
	?>
	</li>
	<br>
	<li>task3 - Strings&Values2:<br>
	<?php
	$one = 'Good morning';
	$two = 'ladyies';
	$three = 'and gentlemen';
	echo "<pre> $one $two $three </pre>";
	$full = $one .', '. $two .' '. $three;
	echo $full;
	?>
	</li>
	</ol>
