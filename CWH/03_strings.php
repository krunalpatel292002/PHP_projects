<?php
    $str = "This";
    echo $str."<br>";
    $lenn = strlen($str);
    echo "The length of this string is : ". $lenn . ",  Thank YOu <br>"; //we can concate the strings with "."
    echo "The number of words in this string is : ". str_word_count($str) . " , Thank You <br>";
    echo "The Reverse string is : ". strrev($str) . " , Thank You <br>";
    echo "The search for is in this string is : ". strpos($str, "is") . " , Thank You <br>";
    echo "The REplace string is : ". str_replace("is", "at",$str) . "  ,Thank You <br>";
    // echo $lenn;
?>