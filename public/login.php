<?php
// 用户登录页面
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // 数据库验证逻辑
    $_SESSION['user'] = $username;
    echo "登录成功！欢迎，" . htmlspecialchars($username);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>用户登录</title>
</head>
<body>
    <h1>用户登录</h1>
    <form method="post">
        <label>用户名: <input type="text" name="username" required></label><br>
        <label>密码: <input type="password" name="password" required></label><br>
        <button type="submit">登录</button>
    </form>
</body>
</html>