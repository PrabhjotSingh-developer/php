<?php
$a = [10, 5, 15, 6, 4, 2, 8];
echo "Array Sorting without Inbuilt function <br>";
echo "Array before sorting <br>";
printArr($a);
function printArr($a)
{
    for ($i = 0; $i < count($a); $i++) {
        echo $a[$i] . "  ";
    }
}
function descSort($a)
{
     for($i=0;$i<count($a) -1;$i++)
     {
         for($j=$i+1;$j<count($a);$j++)
         {
             if($a[$i]<$a[$j])
             {
                  $t = $a[$i];
                  $a[$i] = $a[$j];
                  $a[$j] = $t;

             }
         }
     }
     echo "<br> Sorting in Descending order <br>";
     printArr($a);
}
function asceSort($a)
{
     for($i=0;$i<count($a) -1;$i++)
     {
         for($j=$i+1;$j<count($a);$j++)
         {
             if($a[$i]>$a[$j])
             {
                  $t = $a[$i];
                  $a[$i] = $a[$j];
                  $a[$j] = $t;

             }
         }
     }
     echo "<br> Sorting in Ascending Order <br>";
     printArr($a);
}
asceSort($a);
descSort($a);
?>