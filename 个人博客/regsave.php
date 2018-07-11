<?php
session_start();
include_once("conn.php");
$name=$_POST["name"];
$userpwd=$_POST["userpwd"];
$tel=$_POST["tel"];
$email=$_POST["email"];
$sql=mysqli_query($conn,"select name from user where name='".$name."'");
$info=mysqli_fetch_array($sql);
if($info){
    echo "<script>alert('对不起，你的用户名已经被占用！');history.back();</script>";
    exit;
}
if(mysqli_query($conn,"insert into user (name,userpwd,tel,email)values('$name','$userpwd','$tel','$email')")){

    echo "<script> {window.alert('注册成功');location.href='login.html'} </script>";
}else{
    echo "<script>alert('注册失败！');history.back();</script>";
}
?>