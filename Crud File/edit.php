<html>
<head> </head>
<body>
<form method="post">
    Name: <input type="text" name="name" placeholder="Name"><br><br>
    Email: <input type="email" name="mail" placeholder="Email id"><br><br>
    Password: <input type="password" name="pass" placeholder="Password"><br><br>
    <button type="submit" name="update">Update Data</button>
</form>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";

$connection = mysqli_connect($servername,$username,$password,"previousyear") or die("Connection Failed");



if(isset($_POST['update'])) {
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];

    $uid = $_GET['uid'];
    $updatequery = "UPDATE login set uname = '$name' , umail = '$mail' , upass = '$pass' where uid = $uid";

    if (isset($_GET['uid'])) {
        if (mysqli_query($connection, $updatequery)) {
            echo "Update Successfully";
        } else {
            die("Failed");
        }
    }
}
?>
