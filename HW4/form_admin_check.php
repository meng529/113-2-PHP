<?php
session_start();
?>
<?php

$Answer1="福如東海";
$Answer2="19861015";
$Name=$_GET["uName"];
$Pwd=$_GET["uBirth"];

if(isset($_SESSION["admin"])){
}else{
    echo "illegal user!";
    header("Refresh:2;url='login.php'");
}

if($Answer1==$Name && $Answer2==$Pwd){
    $_SESSION["check"]=1;
    $cookiedate=strtotime("+20 seconds",time());
    setcookie("Answer1",$Answer1,$cookiedate);    
    setcookie("Answer2",$Answer2,$cookiedate);
    header("Location:info_admin.php");
}else{
    echo "管理者試驗失敗!!!";
    $_SESSION["check"]=0;
    $cookiedate=strtotime("+20 seconds",time());
    header("Refresh:3;url='form_admin.php'");
}
?>