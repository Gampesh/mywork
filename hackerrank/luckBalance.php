<?php
/*
 * sample input
6 3
5 1
2 1
1 1
8 1
10 0
5 0
sample output 29
 */
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
list($totalContests, $totalImportantLoosableContest) = explode(" ", trim(fgets($_fp)));

$impotanteContest = array();
$maximamLucks = 0;

for($i = 0; $i<$totalContests; $i++) {
    list($contest, $importance) = explode(" ", trim(fgets($_fp)));
    //echo "[$contest][$importance]";
    if($importance) {
        $impotanteContest[] = $contest;
    } else {
        $maximamLucks += $contest;
    }
}

sort($impotanteContest);
$sliceSize = (count($impotanteContest) - $totalImportantLoosableContest);
$totalLosedContests = array_slice($impotanteContest, $sliceSize);
$totalLuckUsed = array_slice($impotanteContest, 0, $sliceSize);
echo $maximamLucks + array_sum($totalLosedContests) - array_sum($totalLuckUsed);

?>

<?php
/*
 * another code
 *
 *
 *
6 3
5 1
2 1
1 1
8 1
10 0
5 0
sample output 29
 */

fscanf(STDIN, "%d %d", $n, $k);
$luckArray = array();
$noOfImportant = 0;
$sumOfLuck = 0;
for ($i = 0; $i < $n; $i++) {
    fscanf(STDIN, "%d %d", $l, $t);
    $sumOfLuck += $l;
    if ($t) {
        $luckArray[] = $l;
        $noOfImportant++;
    }
}
$ignore = $noOfImportant - $k;
sort($luckArray);
for($i=0; $i<$ignore; $i++) {
    $sumOfLuck-=($luckArray[$i]*2);
}
echo $sumOfLuck . PHP_EOL;
?>
