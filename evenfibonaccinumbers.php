<?php
$x=4000000;
$array=[1,2];
$zbroj=0;

for($i=1;;){
    if($array[$i]<$x){
        array_push($array, ($array[$i]+$array[$i-1]));
        $i++;
    }else{
        break;
    }
}

foreach($array as $v){
    if($v%2===0){
        $zbroj += $v;
    }else{
        continue;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<body>
<h1 style="text-align:center;color:red;">Fibonacci numbers are numbers that are a sum of the previous two. The total sum of all of the numbers that are under 4 million and even is:</h1>
<br>
<h4 style="text-align:center;color:green;"><?=$zbroj?></h4>
</body>
</html>