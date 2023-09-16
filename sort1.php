<?php
$a = [10, 5, 15, 6, 4, 2, 8];
echo "Array before sorting <br>";
printArr($a);
function printArr($a)
{
    for ($i = 0; $i < count($a); $i++) {
        echo $a[$i] . "  ";
    }
}

sort($a);
echo "<br>Array sort in ascending order <br>";
printArr($a);
echo "<br>array sort in descending order<br>";
rsort($a);
printArr($a);
