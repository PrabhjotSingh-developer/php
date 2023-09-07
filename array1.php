<?php
//  individual array and associative aray 
$a1 = array("a" => "1", "b" => "2", "c" => "3");
$u1 = array(1, 2, 3, 4, 5, 6);
$keys = array_keys($a1);
echo "Using for Loop fetch the element of associative array <br>";
for ($i = 0; $i < sizeof($a1); $i++) {
    echo $keys[$i] . " => " . $a1[$keys[$i]] . "</br>";
}
echo "Using for loop fetch the element of indexed array <br>";
for ($i = 0; $i < count($u1); $i++) {
    echo $u1[$i] . " ";
}
