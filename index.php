<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
         
       
       <form action="data.php"  method="get">
             <label for="name">Enter string</label>
              <input type = "text"   name="string"/> <br/> <br/>
         <label for="name">Enter character or substr you want to replace</label>
             <input type = "text" name="search"/><br><br>
          <label for="name">Enter replacing character or substr</label>
             <input type = "text" name="replace"/><br><br>
              <input type = "submit" value = "submit"/>
         
         </form> 

 
         
</body>
</html>


<?php 
 

 /*  string concatination 
     $a = "Hello ";
     $b = "World";
     echo "String Concatination with dot => ".$a.$b;
     echo "<br>";
     $a.=$b;
     echo "String Concatination with assign <br>";
      echo $a;*/
  ?>

