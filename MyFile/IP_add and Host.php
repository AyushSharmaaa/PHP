<?php
echo "IP ADDRESS - " .$_SERVER['REMOTE_ADDR'];
echo "<br>Host Name - ".gethostbyaddr($_SERVER['REMOTE_ADDR']);
?>