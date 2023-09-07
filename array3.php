<?php
   
     $a = array(array(1,2),array(2,5));
     $b = array(array(3,1),array(2,0));
     $c = array();
     function printMatrix($m1)
     {
        foreach($m1 as $row =>$col)
        {
            // echo $m1[0][0];
             foreach($col as $value)
             {
                  echo "<span style = 'margin:1rem'>$value</span>";
             }
             echo "<br>";
        }
     }
     function add($m1,$m2)
     {
         for($i=0;$i<count($m1);$i++)
         {
              for($j=0;$j<count($m2);$j++)
              {
                  echo "<span style = 'margin:1rem'>".$m1[$i][$j] + $m2[$i][$j]."</span>";
              }
             echo "<br>";

         }
     }
     function sub($m1,$m2)
     {
         for($i=0;$i<count($m1);$i++)
         {
              for($j=0;$j<count($m2);$j++)
              {
                  echo "<span style = 'margin:1rem'>".$m1[$i][$j] - $m2[$i][$j]."</span>";
              }
             echo "<br>";

         }
     }
     function trans($m1)
     {
         for($i=0;$i<count($m1);$i++)
         {
              for($j=0;$j<count($m1);$j++)
              {
                  echo "<span style = 'margin:1rem'>".$m1[$j][$i]."</span>";
              }
             echo "<br>";

         }
     }
     function multi($m1,$m2)
     {
         for($i=0;$i<count($m1);$i++)
         {
              for($j=0;$j<count($m2);$j++)
              {
                 $c[$i][$j] = 0;
                 for($k=0;$k<count($m2);$k++)
                 {
                   $c[$i][$j] += $m1[$i][$k]*$m2[$k][$j];

                 }
              }
              
            }
            echo "<br>";
         printMatrix($c);
     }
     echo "Matrix A  <br>";
     printMatrix($a);
     echo "<br>Matrix B  <br>";
     printMatrix($b);
     echo "<br>Addition of Matrix A + B is <br>";
     add($a,$b);
    
     echo "<br>Subtraction of Matrix A - B is <br>"; 
     sub($a,$b);

     echo "<br>transpose of Matrix B is <br>"; 
     trans($b);

     echo "<br>Multipication of Matrix A * B is "; 
     multi($a,$b);
?>