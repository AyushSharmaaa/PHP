//Defination , perameter , code ----- 5 marks//
<!DOCTYPE html>
<?php
setcookie("classphp" , $_SERVER['REMOTE_ADDR'], time()+60);
?>
<html>
<head>

</head>
<body>

</body>
<?php
if (isset($_COOKIE['classphp']))
{
    echo "Cookie is set";
    echo $_COOKIE['classphp'];
    // setcookie("classphp" , "" , time()-60); //for detele cookie
}
else
{
    echo "Cookie is not set";
}
?>
</html>

