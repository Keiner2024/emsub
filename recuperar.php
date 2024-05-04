<?php
include("conf.php");
$email=$_POST['email'];

$stm=mysqli_query($mysqli,"SELECT * FROM user WHERE email='$email'");
if($row=mysqli_fetch_array($stm)){
    $id=$row["id"];
    header("Location:login.php?authentication=$id");
}else{header("location:login.php?denied=1");}

?>