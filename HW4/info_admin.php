<?php
session_start();
?>

<?php
if(isset($_SESSION["admin"]) && $_SESSION["check"]){
    $A1=$_COOKIE["Answer1"];
    $A2=$_COOKIE["Answer2"];
    
    echo "恭喜您通過管理者的試驗!!!<br>";
    echo "成語為:".$A1."<br>";
    echo "成語中提到的人物的出生年月日為:".$A2."<br>";
    echo "<br>";
}
else{
    echo "illegal user!";
    header("Refresh:2;url='login.php'");
}

?>