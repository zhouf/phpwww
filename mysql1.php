<!DOCTYPE html> 
<html> 
<body> 
<h2>MySQL page</h2>
<?php
echo 'MySQL<br>',PHP_EOL;
echo '<br>';

$servername = '192.168.209.60';
$username = 'jsp';
$password = 'mysql';
$db = 'jsp';
echo $servername;

//创建连接
$conn = mysqli_connect($servername,$username,$password,$db);

//检查连接
if(!$conn){
    echo 'NO';
    die('连接失败：'. mysqli_connect_error());
}
echo '连接成功<br>',PHP_EOL;

$result = mysqli_query($conn,'select * from users');
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo $row['stunum'],' => ',$row['username'],'<br>';
    }
}else{
    echo '0 rows';
}
mysqli_close($conn);

echo '<br><hr><h2>第二种方式</h2>',PHP_EOL;
$conn = new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
    die('connect error:'.$conn->connect_error);
}
$result = $conn->query('select * from users');
if($result->num_rows>0){
    while($row = $result->fetch_object()){
        echo $row->stunum,' --> ',$row->username,'<br>',PHP_EOL;
    }
}else{
    echo 'No rows';
}
$conn->close();
echo 'connect OK',PHP_EOL;

?>
</body> 
</html>