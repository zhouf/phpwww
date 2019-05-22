<!DOCTYPE html> 
<html> 
<body> 

<?php 
$zhang = 180;
echo "Hello",$zhang,'<br>';
echo 'this is phpwww<br>';
echo '<h2>kkkkk222</h2>';
echo '<pre style="font-size:30pt;">';

$name = 'Kitty';
echo strrev($name);
var_dump($name);
$k = strpos('Hello swufe.edu.cn','all');
var_dump($k);

date_default_timezone_set("PRC");
echo date('Y-m-d H:i:s'),PHP_EOL;

$hour = date('H');
if($hour<12){
    echo 'hour a=',$hour;
}elseif($hour<20){
    echo 'afternoon hour=',$hour;
}else{
    echo 'bb = ',$hour;
}

echo '-----------------',PHP_EOL;
switch($hour){
    case 12:
    echo '1212';
    break;
    case 13:
    echo '1313';
    default:
    echo 'default';
}
echo PHP_EOL;
$cars = array(13,7,2,26,18,6);
echo 'cnt=',count($cars),PHP_EOL;
rsort($cars);
foreach($cars as $c){
    echo 'car=',$c,PHP_EOL;
}

$uname = $_GET['uname']?? 'noname';
echo PHP_EOL,'uname=',$uname,PHP_EOL;
echo '</pre>';
?>
</body> 
</html>