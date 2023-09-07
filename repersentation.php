<?php
        echo "Display string using four methods :- <br>";
        echo '1. Single-quote strings  <br>';
        $singleQuote = 'It \'ll be interesting to know about the string. <br>';
        echo $singleQuote;
        echo "2.Double-quote strings<br>";
        $doubleQuotes = " String in Double Quotes";
        echo $doubleQuotes;
        echo "<br/>";
        echo "3. Herodoc strings <br>";
        $hero = <<<testherodoc
             hello guys,
             how are you?
          testherodoc;
        echo $hero;
        echo "<br/>";
        echo "4. Nowdoc strings <br>";
          $now = <<<'nowdoc'
          Welcome to PHP.
          
nowdoc;
        echo $now;
       echo "<br>";
      // echo "hello world";
?>