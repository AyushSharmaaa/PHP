<?php
echo "<table border='1px' bgcolor='red'>";
for ($row=1;$row<=8;$row++)
{
    echo "<tr>";
    for ($column=1;$column<=8;$column++)
    {
        if (($row+$column)%2==0)
        {
          echo "<td height='25px' width='25px' bgcolor='black'></td>";
        }
        else
        {
            echo "<td height='25px' width='25px' bgcolor='white'></td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
?>