<?php
$str = $_GET["array"];
$arr = explode(" ",$str);
printArr($arr);
$option = $_GET["option"];
$element = $_GET["element"];
$index = $_GET["insertIndex"];
$delIndex = $_GET["deleteIndex"];
function printArr($a)
{
    for($i=0;$i<count($a);$i++)
    {     
          
          echo "<span style='padding: 0 20px; border:1px solid black'>$a[$i]</span>";
    }
    echo "<br/>";
}

switch($option)
{
  case "beg":
       echo "<br/>After Inserting Element at Beg <br/> <br/>";
       Insertion($arr,0,$element);
        break;
  case "end":
        echo "<br/>After Inserting Element at End <br/> <br/>";
        Insertion($arr,count($arr),$element);
        break;
  case "inIndex":
        echo "<br/>After Inserting Element at given Index = $index<br/> <br/>";
        Insertion($arr,$index,$element);
        break;
  case "delBeg":
       echo "<br/>After Deleting Element from Beg <br/><br/>";
       Deletion($arr,0);
       break;
  case "delEnd":
    echo "<br/>After Deleting Element from End <br/> <br/>";
    Deletion($arr,count($arr)-1);
       break;
   case "delIndex":
    echo "<br/>After Deleting  Element at given Index = $delIndex<br/> <br/>";
      Deletion($arr,$delIndex);
       break;      
}
function Insertion($arr,$index,$e)
{
     for($i=count($arr)-1;$i>=$index;$i--)
     {
          $arr[$i+1] = $arr[$i];
     }
     $arr[$index] = $e;
     printArr($arr);
}
function Deletion($arr,$index)
{
     for($i=$index;$i<count($arr)-1;$i++)
     {
          $arr[$i] = $arr[$i+1];
     }
     
     for($i=0;$i<count($arr)-1;$i++)
     {
        echo "<span style='padding: 0 20px; border:1px solid black'>$arr[$i]</span>";

     }
     echo "<br/>";
}

?>