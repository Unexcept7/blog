<?php
include_once ("conn.php");
$title=$_POST["title"];
$time=$_POST["create_time"];
$content=$_POST["content"];
$id=$_GET['id'];
$sql="update article set title='$title',time=  '$time',content='$content' where id=  $id";
$result=mysqli_query($conn,$sql);
if(!$result)
    echo "<script>alert('修改失败，重新修改');location.href=\"article3.php\";</script>";
else
    echo "<script>alert('修改成功');location.href=\"article2.php\";</script>";
mysqli_close($conn);
?>