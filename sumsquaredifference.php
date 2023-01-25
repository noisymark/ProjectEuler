<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
    if($x=$_POST['x']){
        $kvadratnizbroj=0;
        $zbroj=0;
        if(((int)$x)>0){
            for($i=0;$i<=$x;$i++){
                $kz = pow($i,2);
                $kvadratnizbroj += $kz;
                $zbroj += $i;
            }
            $z = pow($zbroj,2);
            $razlika=($z-$kvadratnizbroj);
            $text1='Total difference is: ';
            } else{
                $zbroj='';
                $razlika='';
                $kvadratnizbroj='';
                $text1 = '';
                $x='';
            }
        }
    } else{
        $x='';
        $kz='';
        $kvadratnizbroj='';
        $zbroj='';
        $z='';
        $razlika='';
        $text1='';

    }
?>

<!DOCTYPE html>
<html lang="en">

<body>
<h1 style="text-align:center;color:red;">Displaying the difference of sum and square sum of first X(input) numbers</h1>
    <form style="text-align:center;" action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="x">Enter the number(X): </label>
        <input type="text" name="x" id="x">
        <br><br>
        <input type="submit" value="SET">
        <h4 style="text-align:center;color:green;"><?=$text1?><?=$razlika?></h4>
    </form>
</body>
</html>