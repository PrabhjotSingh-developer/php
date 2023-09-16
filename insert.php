<?php
    $a = [10,20,30,40];
    for($i=0;$i<count($a);$i++)
    echo $a[$i]."<br>";
    
    for($i=count($a)-1;$i>=0;$i--)
    {
        $a[$i+1] = $a[$i];
         
    }
   
    $a[0] = 15;
    echo"--------------";
        for($i=0;$i<count($a);$i++)
          echo $a[$i]."<br>";
