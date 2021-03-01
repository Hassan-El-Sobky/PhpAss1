<?php

$x = 3 ;
$y=$x++; //=> 3
$y+= ++$x; // $y=$y+(++$x);
 
if ($y == 7) {
 	$x++;
 	echo $x ."<br>";
 }
else if ($y == 8){
  $x-- ."<br>"; // 5; 
 	echo $x ."<br>"; //4 
	}
else if ($y == 9) {
	$x+=2;
	echo $x ."<br>";
}
else { 
	$x= 0;
	echo $x ."<br>"; }




?>