<?php
// Database Connection
$conn = mysqli_connect("localhost", "root", "", "test");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// MySQL Query
$sql = "SELECT
        DAYOFWEEK(CURDATE()) AS DayOfWeek,
        WEEKDAY(CURDATE()) AS WeekDay,
        DAYOFMONTH(CURDATE()) AS DayOfMonth,
        DAYOFYEAR(CURDATE()) AS DayOfYear,
        DAYNAME(CURDATE()) AS DayName";

$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    echo "<h2>MySQL Date Functions</h2>";
    echo "1. DAYOFWEEK() : " . $row['DayOfWeek'] . "<br>";
    echo "2. WEEKDAY() : " . $row['WeekDay'] . "<br>";
    echo "3. DAYOFMONTH() : " . $row['DayOfMonth'] . "<br>";
    echo "4. DAYOFYEAR() : " . $row['DayOfYear'] . "<br>";
    echo "5. DAYNAME() : " . $row['DayName'] . "<br>";
}

mysqli_close($conn);
?>