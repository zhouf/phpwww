<?php 

$file = fopen('abc.txt','r') or exit('cannot open file');
while(!feof($file)){
    $str = fgets($file);
    echo $str,'<br>';
}
fclose($file);

?>