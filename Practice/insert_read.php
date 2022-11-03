<?php
$username = $_POST['uname'];
$password = $_POST['pass'];

//For connection String
$servername = "localhost";
$user = "root";
$pass = "";

$connect = mysqli_connect($servername,$user,$pass,"user");
if(!$connect)
{
    "Connection Failed";
}

$insertquery = "insert into info (username , password) values ('$username' , '$password')";
if (isset($_POST['save']))
{
    if (mysqli_query($connect,$insertquery))
    {
        echo "Data inserted";
    }
    else {
        echo "Data not inserted ";
    }
}

$readquery = "Select * from info";
if (isset($_POST['read']))
    echo "<table border='1px'>";
if ($result = mysqli_query($connect,$readquery))
{
    if (mysqli_num_rows($result)>0)
    {
        while ($row = mysqli_fetch_assoc($result))
        {
            echo "<tr><td>";
            echo $row['id'];
            echo "</td><td>";
            echo $row['username'];
            echo "</td><td>";
            echo $row['password'];
            echo "</td><td>";
            echo('<a href="update_data.php?id='.$row['id'].'"><button type="submit">update_btn</button></a>');
            echo("</td><td>");
            echo('<a href="delete_data.php?id='.$row['id'].'"><button type="submit">delete_btn</button></a>');
            echo "</td></tr>";
        }
    }
    else {
        echo "No data is here";
    }
    echo "</table>";
}

?>