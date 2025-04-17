<?php
// 数据库连接配置
$host = 'localhost';
$db = 'dilixi';
$user = 'root';
$pass = '';

// 创建数据库连接
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("数据库连接失败: " . $e->getMessage());
}
?>