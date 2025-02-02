<?php
session_start();

require '../../config.php';
require '../../src/database.php';
require '../../src/auth.php';
require '../../src/helpers.php';

$config = require '../../config.php';
$db = new Database($config);
$auth = new Auth($db);

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// 登录尝试计数器初始化
if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // CSRF验证
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die("非法请求");
    }

    // 暴力破解防护
    if ($_SESSION['login_attempts'] >= 3) {
        $error = '尝试次数过多，请15分钟后再试';
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($auth->login($username, $password)) {
            // 登录成功重置计数器
            $_SESSION['login_attempts'] = 0;
            redirect('dashboard.php');
        } else {
            // 登录失败增加计数器
            $_SESSION['login_attempts']++;
            $error = '登录失败，请检查用户名或密码';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理员登录</title>
    <link href="https://cdn.bootcdn.net/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white">
    <div class="max-w-md mx-auto mt-32 p-6 bg-white rounded-xl shadow-sm">
        <h1 class="text-3xl font-semibold text-blue-600 text-center mb-6">
            登录
        </h1>

        <?php if (isset($error)): ?>
            <!-- XSS防护：使用htmlspecialchars转义输出 -->
            <p class="text-red-500 text-center mb-4"><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></p>
        <?php endif; ?>

        <form method="POST">
            <!-- 添加CSRF令牌字段 -->
            <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8'); ?>">
            
            <!-- ... 原有表单字段保持不变 ... -->
            <div class="mb-4">
                <label for="username" class="block text-sm text-gray-700">用户名</label>
                <input name="username" type="text" id="username" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none" placeholder="请输入用户名" required>
            </div>
            
            <div class="mb-6">
                <label for="password" class="block text-sm text-gray-700">密码</label>
                <input name="password" type="password" id="password" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none" placeholder="请输入密码" required>
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 transition duration-200">
                登录
            </button>
        </form>
    </div>

    <!-- 保持 footer 不变 -->
    <?php include('footer.php'); ?>
</body>
</html>