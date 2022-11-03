<?php
//For Connection
$servername = "localhost";
$username = "root";
$password = "";

$connection = mysqli_connect($servername,$username,$password,"previousyear") or die("Connection Failed");


$readdate ="SELECT * FROM login";
echo'<table border="1px">';
if ($result = mysqli_query($connection,$readdate)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>";
            echo $row['uid'];
            echo "</td><td>";
            echo(($row['uname']));
            echo("</td><td>");
            echo(($row['umail']));
            echo("</td><td>");
            echo(($row['upass']));
            echo("</td><td>");
            echo('<a href="edit.php?uid='.$row['uid'].'"><button type="submit">update_btn</button></a>');
            echo("</td><td>");
            echo('<a href="delete.php?uid='.$row['uid'].'"><button type="submit">delete_btn</button></a>');
            echo("</td></tr>\n");
        }
    }
}
echo '</table>';
?>
