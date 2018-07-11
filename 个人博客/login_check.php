<?php
include_once("conn.php");
$name=$_POST["name"];
$userpwd=$_POST["userpwd"];
session_start();
$_SESSION['name']=$name;
$_SESSION['password']=$userpwd;
$sql="select * from user where name='$name'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
if($row['name']){
    if($userpwd==$row['userpwd']){
        if($userpwd=="123"){
            header("Location: index1.php");
        }
        else
        header("Location: index.html");
    }
    else {
        echo "<script>alert('密码错误');history.back();</script>";
    }
}
else echo "<script>alert('用户名不存在');history.back();</script>";
?>
