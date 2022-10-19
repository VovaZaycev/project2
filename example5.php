<?
$HDD=$_GET['HDD'];
if($HDD=="Maxtor"){
    $CDROM="Teac";
}
elseif($HDD=="Seagate"){
    $CDROM="Nec";
}else{
    $CDROM="незнаю";
}

/*$CDROM=($HDD=="Maxtor") ? "Teac" : "Nec";*/

echo "<table><caption>HDD=$HDD <br> CDROM=$CDROM</caption></table>"
?>

