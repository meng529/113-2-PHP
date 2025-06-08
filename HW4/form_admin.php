<?php
session_start();
?>

<html>
<head></head>
<body>
<?php

if(isset($_SESSION["admin"])){
    echo "Welcome! ".$_COOKIE["Name"]."<br>";
    echo "<a href='logout.php'>Logout</a>";

    echo "<form action='form_admin_check.php' method='GET'>";
    echo "請輸入一個4字成語:<input type='text' name='uName'><br>";
    echo "請輸入一組出生年月日: <input type='number' name='uBirth'><br>";
    echo "<br><input type='submit'><input type='reset'>";
    echo "</form>";
}else{
    echo "illegal user!";
    header("Refresh:2;url='login.php'");
}
?>
</body>
</html>