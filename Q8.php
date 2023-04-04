<?php 
$allstates = "Mississippi Alabama Texas Massachusetts Kansas";
$arr = explode(" ", $allstates);
$states = array();

for($i=0;$i<count($arr);$i++) {
    if(strpos($arr[$i],"xas")) {
        $states[0]=$arr[$i];
        break;
    }
}

for ($i = 0; $i < count($arr); $i++) {
    if (($arr[$i][0] == "k") && ($arr[$i][strlen($arr[$i]) - 1] == "s")) {
        $states[1] = $arr[$i];
    }
    else {
        $states[1] = "";
    }
}

for ($i = 0; $i < count($arr); $i++) {
    if (($arr[$i][0] == "M") && ($arr[$i][strlen($arr[$i]) - 1] == "s")) {
        $states[2] = $arr[$i];
        break;
    }
}

for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i][strlen($arr[$i]) - 1] == "a") {
        $states[3] = $arr[$i];
        break;
    }
}


for($i=0 ; $i<count($states) ; $i++) {
    echo"".($i)."->".$states[$i]."<br>";
}
?>