<?php
       $num = 6;
       $factorial= fact($num);
       function fact($num) 
         {
            // $x = 1;
           if($num == 0 )
           { 
              echo "------------------------------------------------------------------- <br>";
                      echo "Now base condition is reached backtracking will start <br>"; 
             echo "------------------------------------------------------------------- <br>";
             
              return 1;
           }
           else if($num<0)
           {
             echo"-----------------------------<br>";
              echo "factorial not defined <br>";
             echo"-----------------------------<br>";
             
           }
           else{
             echo "To find the factorial of $num * !($num-1) <br>";
             echo "Calculating $num * ".$num-1;
              echo "! <br>";
             $x = $num;
             $y = fact($num-1);
            $z = $x *$y;
             echo "Returning values : $z = $num * $y";
             echo " <br>";
             return $z;
           }
         }
    echo "<br>";
   if($factorial>0)
    echo "factorial of $num is = $factorial";
?>