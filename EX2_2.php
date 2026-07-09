<!DOCTYPE html>
<html>
<head>
    <title>Sort Array in PHP</title>
</head>
<body>

<h2>Sorting an Array</h2>

<form method="post">
    Enter Array Elements (comma separated):<br><br>
    <input type="text" name="arr" placeholder="10,5,30,20,15" required>
    <br><br>
    <input type="submit" name="submit" value="Sort">
</form>

<?php
if(isset($_POST['submit']))
{
    // Get input from user
    $arr = $_POST['arr'];

    // Convert string to array
    $array = explode(",", $arr);

    // Sort array in ascending order
    sort($array);

    echo "<h3>Sorted Array:</h3>";
    foreach($array as $value)
    {
        echo $value . " ";
    }
}
?>

</body>
</html>