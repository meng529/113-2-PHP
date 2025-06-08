<?php
session_start();
session_destroy(); #移除登入狀態
header("Location:login.php");
?>