<?php
$cookie_name = "user";
$cookie_value = "AyushSharma";

//Create Cookie
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

//View Cookie $_COOKIE[name of cookie]
if(isset($_COOKIE[$cookie_name]))
{
    echo "Cookie Value : " . $_COOKIE[$cookie_name];
}
else
{
    echo "Cookie is not set!";
}

// set the expiration time
setcookie("user", "", time() - (86400*30) );

?>