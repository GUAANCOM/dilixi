# dilixi
A platform for low-interest loans with separate roles for administrators, lenders, and borrowers

dilixi/
├── public/             # 前端页面
│   ├── index.php       # 网站首页
│   ├── register.php    # 用户注册页面
│   ├── login.php       # 用户登录页面
│   ├── css/            # 样式文件
│   │   └── style.css   # 通用样式文件
├── admin/              # 后台管理系统
│   ├── dashboard.php   # 管理员仪表盘
│   ├── manage_users.php # 用户管理页面
├── config/             # 配置文件
│   └── database.php    # 数据库连接配置
├── includes/           # 通用功能
│   ├── auth.php        # 用户认证功能
│   ├── functions.php   # 通用函数
├── sql/                # 数据库初始化脚本
│   └── schema.sql      # 表结构
├── README.md           # 项目说明文档
