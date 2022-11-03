<?php
echo "<table border='1px' cellpadding='3px' cellspacing='1px'>";
for ($i = 1; $i<=10; $i++)
{
    echo "<tr>";
    for ($j = 1 ; $j<=16; $j++)
    {
        echo "<td>";
        echo "$j * $i = " .$i*$j;
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

