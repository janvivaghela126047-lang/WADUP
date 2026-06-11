<?php
$month = date("n");
echo "<h2>current month using if..else :</h2>";

if ($month == 1)
    echo "Current Month: January";
else if ($month == 2)
    echo "Current Month: February";
else if ($month == 3)
    echo "Current Month: March";
else if ($month == 4)
    echo "Current Month: April";
else if ($month == 5)
    echo "Current Month: May";
else if ($month == 6)
    echo "Current Month: June";
else if ($month == 7)
    echo "Current Month: July";
else if ($month == 8)
    echo "Current Month: August";
else if ($month == 9)
    echo "Current Month: September";
else if ($month == 10)
    echo "Current Month: October";
else if ($month == 11)
    echo "Current Month: November";
else
    echo "Current Month: December";

    echo "<hr>";

    echo"<h1> current month using switch :</h2>";

    switch ($month) {
        case 1:
            echo "Current Month: January";
            break;
        case 2:
            echo "Current Month: February";
            break;
        case 3:
            echo "Current Month: March";
            break;
        case 4:
            echo "Current Month: April";
            break;
        case 5:
            echo "Current Month: May";
            break;
        case 6:
            echo "Current Month: June";
            break;
        case 7:
            echo "Current Month: July";
            break;
        case 8:
            echo "Current Month: August";
            break;
        case 9:
            echo "Current Month: September";
            break;
        case 10:
            echo "Current Month: October";
            break;
        case 11:
            echo "Current Month: November";
            break;
        case 12:
            echo "Current Month: December";
            break;
        default:
            echo "Invalid Month";
    }
?>