<?php
// 通用函数
function redirect($url) {
    header("Location: $url");
    exit();
}
?>