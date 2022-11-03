<?php
$str = "Hello world It's a beautiful day";
print_r (explode(" ",$str));
echo "<br>";

$arr = array("Hello" , "World" , "Day" , "Beautiful");
print_r(implode("+" , $arr));

phpinfo();
?>