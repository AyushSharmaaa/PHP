<html>
<head> </head>
<body>
<form method="post">
    Username : <input type="text" name="name"><br><br>
    Password : <input type="password" name="pass"><br><br>
    <button type="submit" name="update">Update Data</button>
</form>
</body>
</html>
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

if (isset($_POST['update'])) {

    $username = $_POST['name'];
    $password = $_POST['pass'];

    $id = $_GET['id'];
    $updatequery = "update info set username = '$username' , password = '$password' where id = $id";
    if (isset($_GET['id'])) {
        if (mysqli_query($connect, $updatequery)) {
            echo "Updated";
        } else {
            die("Failed");
        }
    }
}
?>