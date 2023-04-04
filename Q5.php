<?php
$file = 'counter.txt';
echo "<h1>REFERESH PAGE</h1>";
$c = file_get_contents($file);
file_put_contents($file,$c+1);
echo "Total views : ".$c;
?>