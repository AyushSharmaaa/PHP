<?php
//Delete
$servername = "localhost";
$username = "root";
$password = "";

$connection = mysqli_connect($servername,$username,$password,"previousyear") or die("Connection Failed");

$uid = $_GET['uid'];
$deletequery = "DELETE FROM login where uid = $uid";
if(isset($_GET['uid']))
{
    if (mysqli_query($connection,$deletequery))
    {
        echo "Delete Successfully";
    }
    else{
        die("Failed");
    }
}
?>