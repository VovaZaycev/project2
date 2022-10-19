<?php
$tireqty=$_GET['a'];
$z="<b>Знижка дорівнює:</b>";
$n="<b>Без знижки ('_')</b>";

$i="%";

if($tireqty>=10 && $tireqty<=49){
    $discount=5;
    echo "$z $discount $i <br>";
}
elseif($tireqty>=50 && $tireqty<=99){
    $discount=10;
    echo "$z $discount $i <br>";
}
elseif($tireqty>=100){
    $discount=15;
    echo "$z $discount $i <br>";
}
else echo"$n";
?>
