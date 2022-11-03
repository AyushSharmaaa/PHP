<?php
$name = $_POST['name'];
$roll = $_POST['roll'];
$dob = $_POST['dob'];

// For Server Connection
$servername ="localhost";
$username ="root";
$password = "";

$connection = mysqli_connect($servername,$username,$password,"studentinfo");
if (!$connection)
{
    echo "Connection Problem";
}
//Create
$insertquery = "INSERT INTO details  (name,roll,dob) VALUES ('$name','$roll','$dob')";
if (mysqli_query($connection,$insertquery))
{
    echo "Data Entered";
}
else
{
    echo "Data Not Entered";
}

//Read
$readquery = "SELECT name From details";
$data = mysqli_query($connection,$readquery);
if (mysqli_num_rows($data)>0)
{
    while ($row = mysqli_fetch_row($data))
    {
        echo $row;
    }
}

?>
