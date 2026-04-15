<?php
$x1 = 34;
$x2= 0b0100;//'b' und 'B' erlaubt
$x3 = 034;// octal
$x4 = 0x1a;
echo $x1;
echo $x2;
echo $x3;
echo $x4;

for ($i=0x10; $i < 034 ; $i=$i + 0b11){
	echo $i . "<br>";
	echo chr ($i) . "<br>";
}

for ($i ='a'; $i<='z'; $i++)
	echo $i;

for ($i = ord('a'); $i <= ord('z'); $i++) {
    echo chr($i);
}
?>