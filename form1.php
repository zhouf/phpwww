<!DOCTYPE html> 
<html> 
<body> 
<h2>Form1</h2>
<?php
echo 'form',PHP_EOL;
$username = $_REQUEST['q']?? 'no_q';
echo 'username=',$username,PHP_EOL;
if(is_array($username)){
    foreach($username as $u){
        echo 'choice=',$u,PHP_EOL;
    }
}

?>

<form method="get">
请选择：<select name="q">
<option value="1">Monday</option>
<option value="2">Tuesday</option>
<option value="3">Wednesday</option>
</select>
<input type="text" name="username" value="<?php echo date('Y/m/d') ?>"/>
<input type="submit" value="submit"/>
</form>
</body> 
</html>
<?php
include 'file1.php';

?>