<?php 
$text="Hello world!!!";
echo $text.'<br>';
// count the no of character in a string 
echo strlen($text);
echo '<br>';
// no of words in a string 
echo str_word_count($text);
// reverse a string 
echo '<br>';
echo strrev($text);
// to uppercase 
echo '<br>';
echo strtoupper($text);
// to lowercase 
echo '<br>';
echo strtolower($text);
// replace 
echo '<br>';
echo str_replace('world','php',$text);




?>