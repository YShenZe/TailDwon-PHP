<?php
require '../../config.php';
require '../../src/database.php';
require '../../src/auth.php';
require '../../src/helpers.php';

$config = require '../../config.php';
$db = new Database($config);
$auth = new Auth($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($auth->login($username, $password)) {
        redirect('dashboard.php');
    } else {
        $error = '登录失败，请检查用户名或密码';
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
            <p class="text-red-500 text-center mb-4"><?php echo sanitize($error); ?></p>
        <?php endif; ?>

        <form method="POST">
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
