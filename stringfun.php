<!-- 10 string function in php  -->
<?php
   $str = "Hello World";
   echo "Original string => $str ";
   echo "<br/>";
   echo "The length of string is ".strlen($str);
   echo "<br/>";

   echo "Reverse of string is => ".strrev($str);
   echo "<br/>";

   echo "using str_replace function we replace World with Peter => ". str_replace("World","Peter",$str);
   echo "<br/>";

   echo "using strcmp function we can compare the string => ".strcmp("Hello world!","Hello world!");
   echo "<br/>";

   echo "using strtoupper function we can convert all the character into uppercase => ".strtoupper($str);
   echo "<br/>";

   echo "using strtolower function we can convert all the character into lowercase => ".strtolower($str);
   echo "<br/>";

   echo "using substr function we pass the index number and return only right side of string till end => ".substr("Hello world",6);
   echo "<br/>";

   printf("This is a string %s",$str);
   echo "<br/>";

   echo "chr(100) function return the value which are present on that ascii code => ".chr(100) . "<br>";
   
   echo "ucfirst function return the string and capital the letter of string => ".ucfirst("hello world!");
   echo "<br/>";



?>