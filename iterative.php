<?php
$arrVals=array(30,23,59,93,50,11);
print_r($arrVals);
echo "<br> PHP array Iteration functions";
echo  "<br>current->".current($arrVals)."<br>";
echo  "next->".next($arrVals)."<br>";
echo  "next->".next($arrVals)."<br>";
echo  "next->".next($arrVals)."<br>";
echo  "prev->".prev($arrVals)."<br>";
echo  "end->".end($arrVals)."<br>";
echo  "reset->".reset($arrVals)."<br>";
?>