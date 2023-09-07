<?php
//  individual array and associative aray with for each loop 
$a1 = array("a" => "1", "b" => "2", "c" => "3");
$u1 = array(1, 2, 3, 4, 5, 6);

echo "Using foreach Loop fetch the element of associative array <br>";
foreach($a1 as $k => $value)
{
      echo "Keys = $k and value = $value <br>";
}
echo "<br> Using foreach loop fetch the element of indexed array <br>";
foreach($u1 as $value)
{
       echo "$value ";
}
?>