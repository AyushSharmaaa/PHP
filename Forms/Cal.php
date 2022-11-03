<?php
$firstNum = $_POST['fnum'];
$secNum = $_POST['snum'];
if (isset($_POST['add']))
{
    echo $firstNum+$secNum;
}
else if (isset($_POST['sub']))
{
    echo $firstNum-$secNum;
}
else if (isset($_POST['mul']))
{
    echo $firstNum*$secNum;
}
else if (isset($_POST['div']))
{
    echo $firstNum/$secNum;
    //Error Out Div by zero
}
?>