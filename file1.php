<!-- file read wala program  -->
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
</head>
<body>
    <?php
        $file_open1 = fopen("prabhjot.txt","r");

        while(!feof($file_open1))
        {
           
            echo fgets($file_open1)."<br>";
            
        }
    //    with fgetc function
    $file_open = fopen("prabhjot.txt","r");

    echo "<h1>fgetc function </h1>";
    while(!feof($file_open))
    {
       
        echo fgetc($file_open)."<br>";
        
    }
 
?>
</body>
</html>