<!DOCTYPE html> 
<html> 
<body> 
<h2>Guess Number</h2>
<?php
session_start();
echo 'Guess Number<br>',PHP_EOL;
if(isset($_POST['num'])){
    $num = $_POST['num'];
    //有提交数据，进行比较
    $sn = $_SESSION['snum'];
    $scnt = $_SESSION['scnt'];
    echo '第',$scnt,'次',$num;
    $_SESSION['scnt'] = $scnt + 1;

    if($sn<$num){
        echo '猜大了';
    }elseif($sn>$num){
        echo '猜小了';
    }else{
        echo '猜中了';
        unset($_SESSION['snum']);
    }
    // echo "$sn --> $num <br>";
    
}else{
    //没有提交数据，初始化数据到session
    $_SESSION['snum'] = rand(1,100);
    $_SESSION['scnt'] = 1;

    echo "准备好了，就开始吧<!-- ",$_SESSION['snum']," -->";
}
echo '<br>';
if(isset($_SESSION['snum'])){
?>
    <form method='post'>
    请输入猜的数：<input type="number" name="num"/>
    <input type="submit" value="提交"/>
    </form>
<?php
}else{
    echo "<a href='guess.php'>再玩一次</a>";
}
?>
</body> 
</html>