<?php

$numeric = array ('mon','tue','wed','thu','fri','sat','sun');
print_r($numeric);

echo "<br> <br>";
//associative array
$month = array(
    "January"=>31,
    "February"=>28,
    "March"=>31,
    "April"=>30,
    "May"=>31,
    "June"=>30,
    "July"=>31,
    "August"=>31,
    "September"=>30,
    "October"=>31,
    "November"=>30,
    "December"=>31
);
print_r($month);

echo "<br> <br>";
//Multidimensional Array
$laptop = array(
    array("Dell","Inspiron",55000),
    array("HP","Pavilion",60000)
);
foreach($laptop as $l)
{
    echo "Company: " . $l[0] . "<br>";
    echo "Model: " . $l[1] . "<br>";
    echo "Price: " . $l[2] . "<br><br>";
}
?>