<?php
// 用户注册页面
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    // 保存用户到数据库的逻辑
    echo "注册成功！欢迎，" . htmlspecialchars($username);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>用户注册</title>
</head>
<body>
    <h1>用户注册</h1>
    <form method="post">
        <label>用户名: <input type="text" name="username" required></label><br>
        <label>密码: <input type="password" name="password" required></label><br>
        <button type="submit">注册</button>
    </form>
</body>
</html>