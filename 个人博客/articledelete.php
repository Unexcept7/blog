<?php
include_once ("conn.php");
$id=$_GET['id'];
$sql="delete from article where id=+$id";
$str=mysqli_query($conn,$sql);
if($str){
    echo "<script>alert('删除成功');window.location.href='article2.php'</script>";
}
else {
    echo "<script>alert('删除失败');window.location.href='article2.php'</script>";
}
?>