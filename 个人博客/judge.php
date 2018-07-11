
<?php
session_start();
$name=$_SESSION['name'];
if($name=="123"){
    echo $name."ere";
    header("Location: gbook1.php");
}
else {
    echo $name;
    header("Location: gbook2.php");
}