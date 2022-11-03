<?php
$units = 101;
echo "Calculated Electricity Bill : <br>";

if($units <= 50)
{
    echo $bill = $units * 3.50;
}
else if($units > 50 && $units <= 100)
{
    $temp = 50 * 3.50;
    $remaining_units = $units - 50;
    echo $bill = $temp + ($remaining_units * 4.00);
}
else if($units > 100 && $units <= 200)
{
    $temp = (50 * 3.50) + (100 * 4.00);
    $remaining_units = $units - 150;
    echo $bill = $temp + ($remaining_units * 5.20);
}
else
{
    $temp = (50 * 3.50) + (100 * 4.00) + (100 * 5.20);
    $remaining_units = $units - 250;
    echo $bill = $temp + ($remaining_units * 6.50);
}
?>
