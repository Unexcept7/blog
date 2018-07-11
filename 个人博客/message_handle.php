<?php
include_once ("conn.php");
$title=$_POST["title"];
$author=$_POST["author"];
$message=$_POST["message"];
$time=date('y-m-d h:m:s');
$sql="insert into messageboard(title,author,message,dateline) values('$title','$author','$message','$time')";
$str=mysqli_query($conn,$sql);
if($str){
   echo "<script>alert('留言成功');window.location.href='judge.php'</script>";
}
else {
   echo "<script>alert('留言失败');window.location.href='judge.php'</script>";
}
?>