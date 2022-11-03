<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];

//For Connection
$servername = "localhost";
$username = "root";
$password = "";

$connection = mysqli_connect($servername,$username,$password,"previousyear") or die("Connection Failed");
if(!$connection)
{
    echo "Connection not Created";
}

$insertquery = "INSERT INTO login (uname,umail,upass) VALUES ('$name','$mail','$pass')";
if (isset($_POST['save']))
{
    if (mysqli_query($connection,$insertquery))
    {
        echo "Data Entered";
    }
    else
    {
        echo "Data Not Entered";
    }
}

$readquery = "select * from login";
if (isset($_POST['read'])) {
    echo'<table border="1px">';
    if ($result = mysqli_query($connection,$readquery)) {
        if (mysqli_num_rows($result)>0)
        {
            while ($row = mysqli_fetch_assoc($result)){
                echo "<tr><td>";
                echo $row['uname'];
                echo "</td><td>";
                echo $row['umail'];
                echo "</td><td>";
                echo $row['upass'];
                echo "</td></tr>";
            }
        }
        else { echo "No Record Found";}
    }
    echo '</table>';
}
?>
