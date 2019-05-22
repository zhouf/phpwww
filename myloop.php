<!DOCTYPE html> 
<html> 
<body> 
<h2>My Loop</h2>
<?php

function add($a,$b){
    echo PHP_EOL,"$a + $b = ",($a+$b),PHP_EOL;
    return $a+$b;
}

echo '<pre style="font-size:30pt;">';

$i = 1;
$sum = 1;
while($i<=15){
    $sum *= $i;
    $i++;
}
echo 'sum1=',$sum,PHP_EOL;

$i = 1;
$sum = 0;
do{
    $sum += $i;
    $i++;
}while($i<=100);
echo 'sum=',$sum,PHP_EOL;

for($i=1;$i<=10;$i+=2){
    echo "run $i, ";
}

echo add(3,5);

echo 'Line is :' ,__LINE__,PHP_EOL;
echo substr(__FILE__,strlen(__DIR__)-strlen(__FILE__)+1);

echo '</pre>';
?>
</body> 
</html>