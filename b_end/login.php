<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8" />
    <title>后台登录</title>
    <meta name="keywords" content="后台登录" />
    <meta name="description" content="后台登录" />
    <link href='<?php echo "css/login.css"?>'  rel="stylesheet"/>
</head>

<body>
    <div id="main">
        <div class="title">管理登录</div>
        <form method="post">
            <label>用户名：<input class="text" type="text" name="name" /></label>
            <label>密　码：<input class="text" type="password" name="pw" /></label>
            <label>验证码：<input class="text" type="text" name="vcode" /></label>
            <label><img class="vcode" src="images/show_code.jpg" /></label>
            <label><input class="submit" type="submit" name="submit" value="登录" /></label>
        </form>
    </div>
</body>

</html>