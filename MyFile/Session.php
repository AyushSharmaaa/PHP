<?php
session_start();
// Set session variables
if ($_SESSION["user_name"] = "Ayush Sharma")
{
    echo "Welcome ! " . $_SESSION["user_name"];
}
else{
    echo "You are not a Valid User";
}
?>

<?php
session_start();
session_destroy();
echo "Bye-Bye";
?>

