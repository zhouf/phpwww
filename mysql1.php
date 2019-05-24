<!DOCTYPE html> 
<html> 
<body> 
<h2>MySQL page</h2>
<?php
error_reporting(E_ALL^E_NOTICE);
echo 'MySQL<br>',PHP_EOL;
echo '<br>';

$servername = '192.168.209.60';

echo $servername;

//创建连接
$conn = mysqli_connect($servername,'admin','AdminKey','jsp');
echo $conn;

//检查连接
if(!$conn){
    echo 'NO';
    die('连接失败：'. mysqli_connect_error());
}
echo '连接成功';
$result = mysqli_query($conn,'select * from users');
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo 'stunum:',$row['stunum'],'  username:',$row['username'],'<br>';
    }
}else{
    echo '0 rows';
}
mysqli_close($conn);


?>
</body> 
</html>