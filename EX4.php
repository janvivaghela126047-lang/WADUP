<?php
    $str = "welcome to marwadi university";
    echo "<h2>php string function<h2>";
    echo "<b> orignal string</b> " . $str . "<br></br>";
    
    echo "<b>1. strlen():</b></br>";
    echo"length of string = " . strlen ($str);
    echo "<br><br>";

    echo "<br>2.strpos():</b><br>";
    echo"position of marwadi = " . strpos($str, "marwadi");
    echo "<br><br>";

    echo "<br>3.str_word_count():</b><br>";
    echo"total Word = " . str_word_count($str);
    echo "<br><br>";

    echo "<br>4.strrev():</b><br>";
    echo"reverse string = " . strrev($str);
    echo "<br><br>";

    echo "<br>5. strtolower():</b><br>";
    echo strtolower($str);
    echo "<br><br>";

    echo "<br>6.strtoupper():</b><br>";
    echo strtoupper($str);
    
?>