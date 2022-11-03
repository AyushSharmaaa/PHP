<?php

$str1 = 'National';
$str2 = 'Nationel';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First character difference between two strings - At position %d: "%s" vs "%s"',
    $str_pos, $str1[$str_pos], $str2[$str_pos])

?>