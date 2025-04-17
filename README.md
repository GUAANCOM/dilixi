# Dilixi 平台

## 项目简介

Dilixi 是一个低息借贷平台，支持管理员、贷款人和借款人三种角色。

## 文件结构

```
dilixi/
├── public/             # 前端页面
├── admin/              # 后台管理系统
├── config/             # 配置文件
├── includes/           # 通用功能
├── sql/                # 数据库初始化脚本
├── README.md           # 项目说明文档
```

## 安装步骤

1. 克隆此存储库到本地。
2. 配置数据库连接信息（`config/database.php`）。
3. 导入 `sql/schema.sql` 初始化数据库。
4. 启动 Apache 或 Nginx 服务器，访问 `public/index.php`。