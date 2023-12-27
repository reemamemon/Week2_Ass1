<?php
$x = 90;
$y = 30;
$z = 10;

if($x > $y && $x > $z)
{
    echo "The greatest number is: ",$x;
}
elseif($y > $x && $y > $z)
{
    echo "The greatest number is: ",$y;
}
else
{
    echo "The greatest number is: ",$z;
}
?>
