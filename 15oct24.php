<?php
echo "<p>" . __LINE__ . "</P>";
echo "<p>" . __LINE__ . "</P>";
echo "<p>" . __FILE__ . "</P>";
echo "<p>" . __DIR__ . "</P>";




$num1 = 10;
$num2 = 30;

echo "<p>$num1 + $num2 = " . $num1+$num2 . "<p>";
//OR
$res  = $num1+$num2;
echo "<p>$num1 + $num2 = $res</p>";

$res  = $num1-$num2;
echo "<p>$num1 - $num2 = $res</p>";

$res  = $num1/$num2;
echo "<p>$num1 / $num2 = $res</p>";

$res  = $num1*$num2;
echo "<p>$num1 X $num2 = $res</p>";

$res  = $num1**$num2;
echo "<p>$num1 ^ $num2 = $res</p>";

$res  = $num1%$num2;
echo "<p>$num1 % $num2 = $res</p>";
?>

