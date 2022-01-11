<?php

//strlen(), str_word_count(), str_pos(), str_replace()

$str = "Aishwarya D";
$str1 = "Khatri";
echo $str;
$len = strlen($str);
echo "<br>The length of the String is: ".$len;
echo "<br>".$str.$str1; //string concatenated by "."
echo "<br>The number of words in this string is: ".str_word_count($str);
echo "<br>Reversed string: ".strrev($str); 
echo "<br>The search for ish in this string".strpos($str, "ish");
echo "<br>The replaced string is: ".str_replace("ish", "sh", $str);

?>