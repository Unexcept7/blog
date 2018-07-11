<?php
include_once ("conn.php");
$title=$_POST["title"];
$time=$_POST["create_time"];
$content=$_POST["content"];
$sql="insert into article(title,content,time) values('$title','$content','$time')";
$str=mysqli_query($conn,$sql);
if($str){
    echo "<script>alert('保存成功');window.location.href='article2.php'</script>";
}
else {
    echo "<script>alert('保存失败');window.location.href='article1.php'</script>";
}
?>