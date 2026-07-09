<!DOCTYPE html>
<html>
<head>
    <title>Reverse Array</title>
</head>
<body>


<h2>Reverse Array Values</h2>


<form method="post">
    Enter array values (separated by comma):<br><br>
    <input type="text" name="numbers" required>
    <br><br>
    <input type="submit" value="Reverse">
</form>


<?php
if(isset($_POST['numbers']))
{
    $input = $_POST['numbers'];


    // Convert string to array
    $array = explode(",", $input);


    // Reverse the array
    $reverse = array_reverse($array);


    echo "<h3>Original Array:</h3>";
    echo implode(", ", $array);


    echo "<h3>Reversed Array:</h3>";
    echo implode(", ", $reverse);
}
?>


</body>
</html>
