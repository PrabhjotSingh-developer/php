<?php
  $name = "user";
  $value = "Prabhjot singh";
    
    setcookie($name,$value,time() + 5);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Document</title>
</head>
<body>
    
      <?php
            if(isset($_COOKIE[$name]))
            {

                echo "Cookie Name is ".$name ." is not set ";
                echo "<br/>";
            }
            else
            {
                echo "Cookie Name is ".$name ." is  set";
                echo "<br/>";

                echo "Cookie value is ".$value ." is  set";
                 
            }
      ?>
</body>
</html>