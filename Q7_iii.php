<?php
$a = array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9));
$b = array(array(4, 5, 6), array(3, 2, 1) , array(10, 11, 12));

$r = count($a);
$c = count($b[0]);
$p = count($b);
if (count($a[0]) != $p) {
    echo "Incompatible matrices";
    exit(0);
}
$result = array();
for ($i = 0; $i < $r; $i++) {
    for ($j = 0; $j < $c; $j++) {
        $result[$i][$j] = 0;
        for ($k = 0; $k < $p; $k++) {
            $result[$i][$j] += $a[$i][$k] * $b[$k][$j];
        }
    }
}

for($i = 0; $i<count($result); $i++) {
    for ($j=0; $j < count($result[count($result)-1]); $j++) { 
        echo"".$result[$i][$j]."  ";
    }
    echo"<br>";
}
?>