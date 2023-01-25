<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
    if($x=$_POST['x']){
        if(((int)$x)>0){
            $zbroj=0;
            for($i=1;$i<$x;$i++){
                if($i%3===0 || $i%5===0){
                    //Number is dividable with 3 or 5
                    $zbroj += $i;
                    $text1 = 'The total sum is: ';
                } else{
                    continue;
                }
            }
        }
    } else{
        
    }
}else{
    $x='';
        $zbroj='';
        $text1 = '';
}
?>

<!DOCTYPE html>
<html lang="en">

<body>
    <h1 style="text-align:center;color:red;">Finding all multiples of 3 or 5 that are lower of X(input) and adding them to a sum.</h1>
    <form style="text-align:center;" action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="x">Enter the number(X): </label>
        <input type="text" name="x" id="x">
        <br><br>
        <input type="submit" value="SET">
        <h4 style="text-align:center;color:green;"><?=$text1?><?=$zbroj?></h4>
    </form>
</body>
</html>