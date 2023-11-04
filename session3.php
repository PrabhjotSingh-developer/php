<!-- encoded decoded session  -->
<?php

      session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
      <?php
        $_SESSION["Title"] = "Best youtube channel to learn basics of programming language";
        $_SESSION["NAME"] = "MYSIRG";
        $enc = session_encode();
        echo "<br>Session encoded data : <br>"; 
        echo $enc;
        echo "<br> Session decoded data: <br>";
        session_decode($enc);
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
      ?>
</body>
</html>