<?php
session_start();
require("config/Config.php");
class Users extends Config{
// For login
public function users_login($data){
//print_r($data);
$email=$data['email'];
$password=md5($data['password']);
$sql="SELECT * FROM `tbl_users` WHERE `email`='$email' AND `password`='$password'";
$result=$this->con->query($sql);
if($row=mysqli_fetch_assoc($result)){
    $_SESSION['admin_email']=$row['email'];
    $_SESSION['admin_password']=$row['password'];
    //print_r($_SESSION);
    header("Location: dashboard.php");
}else{
    $_SESSION['msg']="Email or Password doesn't match";
}
}
}
?>