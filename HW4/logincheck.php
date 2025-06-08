<?php
session_start();
?>
<h1>Login Result</h1>

<?php

$adminName="nuk";
$adminPwd="123456";
$userName="a1104117";
$userPwd="860404";
$Name=$_POST["Name"];
$Pwd=$_POST["Pwd"];

if($adminName==$Name && $adminPwd==$Pwd){
    echo "Login success";
    $_SESSION["admin"]=1;
    $cookiedate=strtotime("+20 seconds",time());
    setcookie("Name",$adminName,$cookiedate);
    header("Location:form_admin.php");
}else if($userName==$Name && $userPwd==$Pwd){
    echo "Login success";
    $_SESSION["user"]=1;
    $cookiedate=strtotime("+20 seconds",time());
    setcookie("Name",$userName,$cookiedate);
    header("Location:form_user.php");
}
else{
    echo "Login failed, will send you back to login again";
    header("Refresh:3;url='login.php'");
}
?>