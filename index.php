<?php
$xlinks = 4;
$xrechts = 5;

if((verschilBerekenen($xlinks) * verschilBerekenen($xrechts))<0){
    echo "interval is bruikbaar";
}else{
    echo "interval is onbruikbaar";
}
function bepaalMidden ($xlinks, $xrechts){
    $middelpuntbinnen = ($xrechts-$xlinks)/2 + $xlinks;
    return $middelpuntbinnen;
}

$middelpuntbuiten = bepaalMidden($xlinks, $xrechts);
r();
echo "HET NIEUWE VERSCHIL IS:(".verschilBerekenen($middelpuntbuiten).")";
r();
//echo tolerantieCheck(0.0000000000001);
echo "TOLERANTIE".tolerantieCheck(verschilBerekenen($middelpuntbuiten));
r();
function tolerantieCheck($hetverschil){
    if($hetverschil < -0.000001 || $hetverschil > 0.000001){
        return "false";
    }else{
        return "true";
    }
}


function verschilBerekenen($getal){
    $verschil = berekenBlauw($getal) - berekenGroen($getal);
    return $verschil;
}
function berekenBlauw($getal){
    $yblauw = pow(($getal - 2), 2)-3;
    return $yblauw;
}
function berekenGroen($getal){
    $yGroen = (-1/3)*$getal+4;
    return $yGroen;
}


echo "verschil xlinks: $xlinks :".verschilBerekenen($xlinks);
echo "<br>";        
echo "verschil xrechts: $xrechts : ".verschilBerekenen($xrechts);
echo "<br>";        

if(verschilBerekenen($xrechts) < 0){
    echo "$xlinks verschil is NEGATIEF";
}else{
    echo "$xlinks verschil is Positief";   
}

echo "Blauw met vier".berekenBlauw($xlinks);
echo "<br>";
echo "Groen met vier".berekenGroen($xlinks);
echo "<hr>";
echo "Blauw met vijf".berekenBlauw($xrechts);
echo "<br>";
echo "Groen met vijf".berekenGroen($xrechts);

//functie (links )//bereken beide punten // retourneert verschil
////$array
//function (links rechts) //beide uitrekenen // dan verschil tussen // push naar array


function r(){
    echo "<br><br>";
}

?>