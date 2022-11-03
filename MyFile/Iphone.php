<?php

class Iphone
{
    public $sto_cap = 256;
    private $col = "Aqua";
public function calli()
{
    echo "call to anonymous";
}
}

$imax = new Iphone;
$imaxpro = new Iphone();
var_dump($imax);

echo $imax -> calli();
echo $imax ->sto_cap;
?>