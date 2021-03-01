<?php

$dupArr=[1,2,3,1,3,3,5,6];
$removeDup=[];

foreach($dupArr as $value)
{
     foreach($removeDup as $dupvalue)
     {                   
         if($dupvalue == $value)
         {
             continue 2;
            
         }
     }
    $removeDup[]=$value;
}


echo"this is remove dup array :";
print_r($removeDup);
?>