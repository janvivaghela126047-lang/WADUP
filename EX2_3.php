<?php

echo "<h2>PHP Array Functions</h2>";

// 1. array_change_key_case()
echo "<h3>1. array_change_key_case()</h3>";
$arr = array("Name"=>"Pinal", "City"=>"Rajkot", "Course"=>"BCA");

echo "<b>Lower Case Keys:</b><br>";
print_r(array_change_key_case($arr, CASE_LOWER));

echo "<br><br><b>Upper Case Keys:</b><br>";
print_r(array_change_key_case($arr, CASE_UPPER));

echo "<hr>";

// 2. array_chunk()
echo "<h3>2. array_chunk()</h3>";
$months = array("January","February","March","April","May","June","July","August","September","October","November","December");

print_r(array_chunk($months, 3));

echo "<hr>";

// 3. array_count_values()
echo "<h3>3. array_count_values()</h3>";
$num = array(10,20,10,30,20,10);

print_r(array_count_values($num));

echo "<hr>";

// 4. array_pop()
echo "<h3>4. array_pop()</h3>";
$a = array("Red","Green","Blue");

array_pop($a);
print_r($a);

echo "<hr>";

// 5. array_push()
echo "<h3>5. array_push()</h3>";
$b = array("Apple","Banana");

array_push($b,"Mango","Orange");
print_r($b);

echo "<hr>";

// 6. array_unshift()
echo "<h3>6. array_unshift()</h3>";
$c = array("BCA","BBA");

array_unshift($c,"B.Com");
print_r($c);

echo "<hr>";

// 7. array_shift()
echo "<h3>7. array_shift()</h3>";
$d = array("PHP","Java","Python");

array_shift($d);
print_r($d);

?>