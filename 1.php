
<?php

$arr=[7,9,55,2,133,888];

$min=$arr[3];
$max=$arr[0];
echo $min ."<br>";


foreach($arr as $value){
     if($min > $value)
     {
         $min=$value;
     }

     if($max < $value)
     {
         $max=$value;
     }
}

echo "min is : $min <br>" ;
echo "max is : $max";

?>