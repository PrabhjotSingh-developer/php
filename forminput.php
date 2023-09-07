<?php
//   string concatination 
 
   echo "<br/>";
     $a = "";
     $b = "";
     $a = $_GET["name"];
     $b = $_GET["email"];
     $c = "Email id => ";
    echo "Str1 => $a <br>";
     echo "Str2 => $b <br>";
     echo "String Concatination with dot  <br>";
     echo "Name => ".$a;
     echo "<br>";
     $c.=$b;
     echo "String Concatination with assign  <br>";
     echo $c;
     
   
    
      
?>