<?php 
echo '<br><pre>',PHP_EOL;
echo PHP_EOL,'==============part.php======',PHP_EOL;
$cars = array(13,7,2,26,18,6);
echo 'cnt=',count($cars),PHP_EOL;
rsort($cars);
foreach($cars as $c){
    echo 'car=',$c,PHP_EOL;
}
echo '-----------end-----------',PHP_EOL;
echo '</pre>',PHP_EOL;
?>