<!-- deletion of session variable  -->
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
          
   
            session_unset();
           
            
         
       
?>
   <h1>All variable deleted</h1>
</body>
</html>