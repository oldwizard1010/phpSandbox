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
	$two = 'ladies';
	$three = 'and gentlemen';
	echo "<ul> <li>$one</li> <li>$two</li> <li>$three</li> </ul>";
	$full = $one .', '. $two .' '. $three;
	echo $full;
	?>
	</li>
	<br>
	<li>task4 - Arrays:<br>
	<?php
	$arr1 = array(12, 45, 'john', 6);
	$arr2 = ['valhalla', 'heaven', 'hell', 6];
	$arr1['element'] = 2;
	unset($arr2[0]);
	echo "$arr1[2] , $arr2[2]";
	echo '<pre>';
	print_r($arr1);
	print_r($arr2);
	echo '</pre>';
	echo '1st array has '. count($arr1) . ' elements, 2nd has - ' . count($arr2);
	?>
	</ol>
