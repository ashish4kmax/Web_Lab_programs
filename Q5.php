<?php
$file = 'counter.txt';
echo "<h1>REFERESH PAGE</h1>";
$c = file_get_contents($file);
file_put_contents($file,$c+1);
echo "Total views : ".$c;
?><?php 

 print"<h3>Refresh Page</h3>"; 

 $name="counter.txt"; 

 $file=fopen($name,"r"); 

 $hits=fscanf($file,"%d"); 

 fclose($file); 

 $hits[0]++; 

 $file=fopen($name,"w"); 

 fprintf($file,"%d",$hits[0]);fclose($file); 

 print("total no. of visits:".$hits[0]);
