<?php
include_once ("conn.php");
$id=$_GET['id'];
$sql="delete from messageboard where id=+$id";
$str=mysqli_query($conn,$sql);
if($str){
    echo "<script>alert('删除成功');window.location.href='judge.php'</script>";
}
else {
    echo "<script>alert('删除失败');window.location.href='judge.php'</script>";
}
?>