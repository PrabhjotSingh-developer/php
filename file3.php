<!-- Directory functions  -->
<?php
   echo "<h2>Directory Functions </h2>";
   echo "Getting current working directory using <b>getcwd()</b> : ".getcwd()."<br>";
   echo "Changing current working directory to subfolder using <b> chdir() </b>";
   chdir("subfolder");
   echo "<br>";
   echo "Getting current working directory <b>getcwd()</b> : ".getcwd();
   echo "Getting a list of array and directories using <b>scandir()</b>";
   echo "<pre>";
   print_r(scandir("."));
   echo "</pre>";
   echo "Getting directory object using <b>dir()</b>";
   echo "<pre>";
   print_r(dir(getcwd()));
   echo "</pre>";
   echo "<br>Reading directory using <b>opendir(),readdir(),closedir() </b>";
   $path = getcwd();
   if($o = opendir($path) )   
   {
      while($fn = readdir($o))
      {
          echo "<br>Filename : ".$fn;
      }
      echo "Reseting a directory handle using <b>rewinddir()</b>".rewinddir($o);
      while($fn = readdir($o))
      {
          echo "<br>filename : ".$fn;

      }
      echo "<br> Close directory using <b>closedir()</b> ";
      closedir($o);
   }




?>