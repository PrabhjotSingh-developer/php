<!DOCTYPE html>
<html lang="en">
<head>
   
</head>
<body>
     <h1>File exist or not</h1>
     
     <?php
     $fileName = "prabhjot.txt";
        if(file_exists($fileName))
        {
              echo "<h3> file exists </h3>";
              echo "<h3> file Size => ".fileSize($fileName)."bytes </h3>";
        }
        else{
              echo "file does not exist";
        }
    //  unlink("prabhjot.txt");

   ?>
</body>
</html>