<?php
// 用户认证功能
function checkAuth() {
    session_start();
    return isset($_SESSION['user']);
}
?>