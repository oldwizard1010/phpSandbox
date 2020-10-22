<DOCTYPE html>
задачи списком:
<ol>
	
<li> task1 - Comments:<br>
<?php
//Hello, I'm Old Wizard
/* and here
 * i am
 * learning
 * how to
 * code
 * in
 * php
 * and web*/
echo "Hello world, Hello guys";
?>
</li>
<br>
<li> task2 - Naming:<br>
<?php
$channelName = 'phpTV';
$vendorAdress = ['country' =>'USA', 'city' => 'NewYork', 'street' => 
'5th avenu', 'houseNumber' => 56];
$carColour = 'white';
$waterTemp = 67;
$phoneModel = 'Sosig';
echo $channelName. ' '. $carColour. ' '. $waterTemp. ' '. $phoneModel;
echo '<pre>';
print_r($vendorAdress);
echo '</pre>';
?>
</li>
<br>
<li> task3 - OPs: <br>
<?php
$num1	= 3;
$num2	= 5;
$num3	= 8;
$sum	= $num1 + $num2 + $num3;
$result = 2+6+2/5-1;
echo $sum;
echo '<br>';
echo $result;
?>
</li>
<br>
<li> task4 - CopyPasting: <br>
<?php
$a = 1;
$b = 2;
$c = $a;
$d = &$b;
echo '$c = '.' '.$c.' $d = '. $d;
?>
</li>
<br>
<li> task5 - Constants:<br>
<?php
define("PI", 3.1415);
const Name = 'Petrovich';
echo Name.' съел ';
echo PI + 2 .' булочек.';
?>
</li>
</ol>
