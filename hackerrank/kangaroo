<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d %d %d",$x1,$v1,$x2,$v2);
if($v1!=$v2){
    if(($x2-$x1)%($v1-$v2) != 0){
        $sameLocation = -1;
    } else {
        $sameLocation = ($x2-$x1)/($v1-$v2);
    }
} else {
    if($x2==$x1){
        $sameLocation = 1;
    } else {
        $sameLocation = -1;
    }
}
if($sameLocation>=0){
    echo "YES";
} else {
    echo "NO";
}
?>
