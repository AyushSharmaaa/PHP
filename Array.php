<?php
$stu_record = [10,"200",78];
$stu_class = array(10,20,30);

echo var_dump($stu_record);
echo "<br>";
print_r($stu_record);
echo "<br>";

// Associative array in php

$stu_marks = ["ML"=> 29 , "DIP" => 28 , "Php" => 30 , "Dist Sys" => 28];
print_r($stu_marks);
echo "<br>";
var_dump($stu_record == $stu_marks);
echo "<br>";
var_dump($stu_record + $stu_marks);
echo "<br>";
$res = (15<8) ? print "8 is Greater" : print "15 is Greater";
echo "<br>";

for ($index = 0; $index<=1; $index++)
{
    echo $stu_record[$index]." ";
}

foreach ($stu_record as $value)
{

}

echo "<br>";
//1
$stu_class = array(10,20,30);
print_r($stu_class);

echo "<br>";
//2
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
print_r(array_change_key_case($age,CASE_UPPER));

echo "<br>";
//3
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes");
print_r(array_chunk($cars,2));

echo "<br>";
//4
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

print_r(array_combine($fname,$age));

echo "<br>";
//5
print_r(array_count_values($cars));

echo "<br>";
//6

$a1=array("red","green","blue","yellow");
$a2=array("red","green","blue");

print_r(array_diff($a1,$a2));

echo "<br>";
//6
$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","c"=>"blue","d"=>"pink");

print_r(array_diff_key($a1,$a2));

echo "<br>";
//7
$a1=array_fill(3,4,"blue");
print_r($a1);

echo "<br>";
//8
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

print_r(array_intersect($a1,$a2));

echo "<br>";
//9
$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);

echo "<br>";
//10
$a=array("red","green","blue");
array_pop($a);
print_r($a);
?>

