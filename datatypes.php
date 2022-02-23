<?php
$name = "emobilis";
$number = 76.78;
$number1 = 76;
$me = true;

var_dump($name);
echo "<br>";
var_dump($number);
echo "<br>";
var_dump($number1);
echo "<br>";

echo str_repeat("todays class we are learning datatypes ", 5);
echo "<br>";
echo str_rot13("nestcape class ");
echo "<br>";
echo strlen("Netscape Web Devs!"); // outputs 18
echo "<br>";
echo str_word_count("Netscape Web Devs"); // outputs 3
echo "<br>";
echo strrev("Netscape Web Devs"); // outputs reverse
echo "<br>";
echo strpos("Netscape Web Devs", "Web"); // outputs 9
echo "<br>";
echo str_replace("Devs", "Development", "Netscape Web Devs"); // Netscape Web Development
echo "<br>";
echo strtoupper("eMobilis Netscape Web Devs");
echo "<br>";
echo strtolower("NETSCAPE WEB DEVS!");
echo "<br>";
print_r(str_split("NETSCAPE"));