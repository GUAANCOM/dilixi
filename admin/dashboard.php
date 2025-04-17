<?php
// 管理员仪表盘
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: ../public/login.php');
    exit();
}
echo "欢迎，管理员 " . htmlspecialchars($_SESSION['user']) . "！";
?>