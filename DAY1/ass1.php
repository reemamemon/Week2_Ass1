<?php
$x = 90;
$y = 30;
$z = 10;

if($x > $y && $x > $z)
{
    echo $x;
}
elseif($y > $x && $y > $z)
{
    echo $y;
}
else
{
    echo $z;
}
?>