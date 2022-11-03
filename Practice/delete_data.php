<?php

//For connection String
$servername = "localhost";
$user = "root";
$pass = "";

$connect = mysqli_connect($servername,$user,$pass,"user");
if(!$connect)
{
    "Connection Failed";
}

$id = $_GET['id'];
$deletequery = "delete from info where id =$id";

if (isset($_GET['id']))
{
    if (mysqli_query($connect,$deletequery))
    {
        echo "Deleted Successfully";
    }
    else {
        echo "Failed";
}
}

?>