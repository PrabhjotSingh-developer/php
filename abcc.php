<?php
$arr = [12,2,5,4,8,2];
print_r($arr);
function Insertion($arr,$e)
{
     for($i=count($arr)-1;$i>=0;$i--)
     {
          $arr[$i+1] = $arr[$i];
     }
     $arr[0] = $e;
   

     print_r($arr);
}
Insertion($arr,4);