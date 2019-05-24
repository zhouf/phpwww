<!DOCTYPE html> 
<html> 
<body> 
<h2>Page1 session</h2>
<?php
session_start();
if(isset($_SESSION['cnt'])){
    $_SESSION['cnt'] = $_SESSION['cnt'] + 1;
}else{
    $_SESSION['cnt'] = 1;
}
echo 'Page1',PHP_EOL;
echo 'session cnt=',$_SESSION['cnt'];

?>

</body> 
</html>