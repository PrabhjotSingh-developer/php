<!-- creating session and set session variables   -->
<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>Document</title>
</head>
<body>
    <?php
           $_SESSION["favColor"] = "red";
        //    accessing session variable 
          echo "Accessing Session variables"
           echo "Favourite Color is ".$_SESSION["favColor"]."<br>";
           print_r($_SESSION);
    ?>
     
</body>
</html>