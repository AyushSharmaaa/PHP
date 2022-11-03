<?php

echo addcslashes("php is a Fun <br> " , "p");
echo addslashes("php 'is 'a fun<br>");
echo bin2hex("Php is a fun<br>");
echo '<br>';
echo hex2bin("50687020697320612066756e3c62723e");
echo chop("Php is a fun" , "n");
echo '<br>';
echo chr("64");
echo '<br>';
echo chunk_split("php is a fun" , "1");
echo '<br>';
//echo convert_cyr_string() Php ne ish ki working band krdi hai
echo convert_uuencode("php is a fun");
echo '<br>';
echo convert_uudecode(",<&AP(&ES(&$@9G5N `");
echo '<br>';
echo crc32("This is php");
echo '<br>';
?>
