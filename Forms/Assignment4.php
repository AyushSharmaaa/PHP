<?php
$String1 = $_POST['Str'];
$String2 = $_POST['Str2'];
$String3 = $_POST['Str3'];
if(isset($_POST['Md5()']))
{
    if (empty($String1)) {
        header("refresh:0,url = Assignment4.html");
    }
    else {
        echo md5($String1);
    }
}
if(isset($_POST['Number_format()'])) {
    if (empty($String1)) {
        header("refresh:0,url = Assignment4.html");
    }
    else {
         echo Number_format($String1);
    }
}
if(isset($_POST['Ord()'])) {
    if (empty($String1)) {
        header("refresh:0,url = Assignment4.html");
    }
    else {
        echo ord($String1);
    }
}
if(isset($_POST['Rtrim()'])) {
    if (empty($String1)) {
        header("refresh:0,url = Assignment4.html");
    }
    else {
       echo rtrim($String1,$String2);
    }
}
if(isset($_POST['Str_replace()'])) {
    if (empty($String1)) {
        header("refresh:0,url = Assignment4.html");
    }
    else {
        echo str_replace($String1,$String2,$String3);
    }
}
if(isset($_POST['Str_len()'])) {
    if (empty($String1)) {
        header("refresh:0,url = Assignment4.html");
    }
    else {
        echo strlen($String1);
    }
}
if(isset($_POST['Strcasecmp()'])) {
    if (empty($String1)) {
        header("refresh:0,url = Assignment4.html");
    }
    else {
        echo strcasecmp($String1,$String2)."<br> #If this function returns 0, the two strings are equal.";
    }
}
if(isset($_POST['Strrpos()'])) {
    if (empty($String1)) {
        header("refresh:0,url = Assignment4.html");
    }
    else { echo strpos($String1,$String2);
    }
}
if(isset($_POST['Substr()'])) {
    if (empty($String1)) {
        header("refresh:0,url = Assignment4.html");
    }
    else { echo substr($String1,$String2);
    }
}
if(isset($_POST['Strtolower()'])) {
    if (empty($String1)) {
        header("refresh:0,url = Assignment4.html");
    }
    else {
        echo strtolower($String1);
    }
}
if(isset($_POST['Bintohex()'])) {
    if (empty($String1)) {
        header("refresh:0,url = Assignment4.html");
    }
    else {
        bin2hex($String1);
    }
}
if(isset($_POST['Chop()'])) {
    if (empty($String1)) {
        header("refresh:0,url = Assignment4.html");
    }
    else { echo chop($String1,$String2);
    }
}
?>
