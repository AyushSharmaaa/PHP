<?php
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$servername = "localhost";
$username = "root";
$password = "";

$Connection = mysqli_connect($servername , $username , $password , "namedb");
if (!$Connection)
{
    die("Problem in Connection!!".mysqli_connect_error());
}
 echo "Connection Created"."<br>";
//INSERT
$insertquery = "INSERT INTO name (fname,lname) VALUES ('$first_name','$last_name')";

if ((mysqli_query($Connection , $insertquery)))
{
    echo "Data Entered"."<br>";
}
else
{
    echo "Data Not Entered"."<br>";
}

//DISPLAY
if (isset($_POST['Save']))
{
    $displayquery = "SELECT fname , lname From name ";
    $data = mysqli_query($Connection , $displayquery);

    if (mysqli_num_rows($data)>0)
    {
        var_dump($data);
    }
    else
    {
        echo "No Record Found";
    }
}
?>