//Heredoc
<?php
$name = "Ayush Sharma";
$str = <<<DEMO
Hello My Name is $name! <br>
PHP is a Fun
DEMO;
echo $str;
?>

//Nowdoc
<?php
$name = "Ayush Sharma";
$str = <<<'DEMO'
Hello My Name is $name! <br>
PHP is a Fun
DEMO;
echo $str;
?>
