<?php
include_once ("conn.php");
$title=$_GET["title"];
$comment=$_POST["comment"];
$time=date('y-m-d h:m:s');
$sql="insert into comment(title,comment,time) values('$title','$comment','$time')";
$str=mysqli_query($conn,$sql);
if($str){
    echo "<script>alert('保存成功');window.location.href='article4.php'</script>";
}
else {
    echo "<script>alert('保存失败');window.location.href='article4.php'</script>";
}
?>