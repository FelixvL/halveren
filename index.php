<?php

$xlinks = 4;
$xrechts = 5;

echo "Blauw met vier".berekenBlauw($xlinks);
echo "<br>";
echo "Groen met vier".berekenGroen($xlinks);
echo "<hr>";
echo "Blauw met vijf".berekenBlauw($xrechts);
echo "<br>";
echo "Groen met vijf".berekenGroen($xrechts);


function berekenBlauw($getal){
    $yblauw = pow(($getal - 2), 2)-3;
    return $yblauw;
}
function berekenGroen($getal){
    $yGroen = (-1/3)*$getal+4;
    return $yGroen;
}



?>
