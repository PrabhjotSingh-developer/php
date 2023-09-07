<?php
//1. echo "Welcome ".$_GET["name"];
// echo "<br>";
// echo "Your email id is ".$_GET["email"];


$str = "";
$str = $_GET["string"];
$search = $_GET["search"];
$replace = $_GET["replace"];


function replacesubstr($str, $search, $replace)
{
   echo "------------------------------------------<br>";
   echo "Original String =>  $str <br>";
   echo "------------------------------------------<br>";

   $s = -1;
   $e = 0;
   $j = 0;
   $l1 = strlen($str);
   $l2 = strlen($search);
   $l3 = strlen($replace);
   if($l1 === 0)
   {
       echo "Please enter the main substring for replacing process<br>";
       return;
   }
   if($l2 === 0)
   {
       echo "Please enter the substring which you want to replace<br>";
       return;
   }
   if($l3 === 0)
   {
      echo "Please enter the new substring string to replace old substring<br>";
      return;
   }
   
   //Down loop find the starting value of substring or character
   for ($i = 0; $i < $l1; $i++) {
      if ($str[$i] === $search[$j] && $s === -1) {
         $s = $i;
         break;
      }
   }
   $e = $l2 -1 + $s;

   //Below if check the character is valid or not
   if($s===-1)
   {
        echo "Character or substring not found";
        return;
   }
   else
   {
       // this else check the substring is available in main string
        $flag = 0;
         $g = 0;
        for($i=$s;$i<=$e;$i++)
        {
           if($str[$i] === $search[$g])
           {
                 $flag = 1;
                 $g++;
           }
           else{
               $flag = 0;
             echo "Substring not found in main string";

               return;
           }
        }
    
   }
   if ($l2 === $l3) {
      // this if work when the replace and new string having same length 
      $z = 0;
      for ($i = $s; $i <= $e; $i++) {

         $str[$i] = $replace[$z];
         $z++;
      }
   }
    else if ($l2 < $l3) {
      
     //this if work when new string having greater length then other string 
      $y = 0;
      for ($i = $l1 - 1; $i > $e; $i--) {

         $str[$l3 + $i + $l2 - 4 ] = $str[$i];
      }
      for ($i = $s; $i < $l3 + $s; $i++) {
         $str[$i] = $replace[$y];
         $y++;
      }
   } 
   else {
      // this if work when length of new string is less than length of replacing string 
      $i = $s;
      $j = 0;
      while ($i < $s + $l3) {
         $str[$i] = $replace[$j];
         $i++;
         $j++;
      }
      while ($i < $s + $l2) {
         $str[$i] = ' ';
         $i++;
      }
   }
   echo "<br>------------------------------------------<br>";
   echo "Updated String => ".$str;
   echo "<br>------------------------------------------<br>";

}




replacesubstr($str, $search, $replace);
