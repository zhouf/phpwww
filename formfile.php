<!DOCTYPE html> 
<html> 
<body> 
<h2>File Upload</h2>
<?php
echo 'file upload',PHP_EOL;
echo '<br>',PHP_EOL;

if ($_FILES["file"]["error"] > 0)
{
    echo "错误：" . $_FILES["file"]["error"] . "<br>";
}
else
{
    echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
    echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
    echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"];
    $str = $_REQUEST['str']?? 'nostr';
    echo 'str=',$str,'<br>',PHP_EOL;
    echo '<br>',PHP_EOL;

    $fname = $_FILES['file']['name'];

    if(file_exists('upload/'.$fname)){
        echo $fname.' file already existed';
    }else{
        move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$fname);
        echo 'file saved in upload/'.$fname;
    }
}
?>

<form action="formfile.php" method="post" enctype="multipart/form-data">
    <label for="file">文件名：</label>
    <input type="file" name="file" id="file"><br>
    <input type="text" name="str" value="kkkk"/><br>
    <input type="submit" name="submit" value="提交">
</form>
</body> 
</html>