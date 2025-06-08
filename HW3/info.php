<?php
$uName=$_GET["uName"];
$uGender=$_GET["uGender"];
$uPwd=$_GET["uPwd"];
$uColor=$_GET["uColor"];
$uBirth=$_GET["uBirth"];
$uEmail=$_GET["uEmail"];
$uPhone=$_GET["uPhone"];
$uFood=$_GET["uFood"];
$uActivity=$_GET["uActivity"];
$uComment=$_GET["uComment"];

echo "您的姓名:".$uName."<br>";
echo "您的性別:".$uGender."<br>";
echo "您的學號:".$uPwd."<br>";
echo "您的代表色:".$uColor."<br>";
echo "您的生日:".$uBirth."<br>";
echo "您的電子郵件:".$uEmail."<br>";
echo "您的聯絡電話:".$uPhone."<br>";
echo "您的餐食:".$uFood."<br>";

$j="";
foreach ($uActivity as $i){
    $j=$j.$i.",";
}
echo "您未來有興趣參加的活動:".$j."<br>";
echo "您的留言:".nl2br(htmlentities($uComment));

?>