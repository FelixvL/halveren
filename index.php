<?php

$xlinks = 4;
$xrechts = 5;

echo "verschil xlinks: $xlinks :".verschilBerekenen($xlinks);
echo "<br>";        
echo "verschil xrechts: $xrechts : ".verschilBerekenen($xrechts);
echo "<br>";        

function verschilBerekenen($getal){
    $verschil = berekenBlauw($getal) - berekenGroen($getal);
    return $verschil;
}

if(verschilBerekenen($xrechts) < 0){
    echo "$xlinks verschil is NEGATIEF";
}else{
    echo "$xlinks verschil is Positief";
    
}

//functie (links )//bereken beide punten // retourneert verschil
////$array
//function (links rechts) //beide uitrekenen // dan verschil tussen // push naar array



function berekenBlauw($getal){
    $yblauw = pow(($getal - 2), 2)-3;
    return $yblauw;
}
function berekenGroen($getal){
    $yGroen = (-1/3)*$getal+4;
    return $yGroen;
}



echo "Blauw met vier".berekenBlauw($xlinks);
echo "<br>";
echo "Groen met vier".berekenGroen($xlinks);
echo "<hr>";
echo "Blauw met vijf".berekenBlauw($xrechts);
echo "<br>";
echo "Groen met vijf".berekenGroen($xrechts);

?>