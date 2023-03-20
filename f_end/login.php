<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8" />
    <title>欢迎登录 - sfkbbs</title>
    <meta name="keywords" content="私房库,私房库111" />
    <meta name="description" content="私房库私房库私房库私房库私房库私房库私房库私房库私房库私房库私房库私房库私房库11" />
    <link rel='stylesheet' type='text/css' href='css/public.css' />
    <link rel='stylesheet' type='text/css' href='css/register.css' />
</head>

<body>
    <div class="header_wrap">
        <div id="header" class="auto">
            <div class="logo">sifangku</div>
            <div class="nav">
                <a class="hover" href="index.php">首页</a>
            </div>
            <div class="serarch">
                <form action="search.php" method="get">
                    <input class="keyword" type="text" name="keyword" value="" placeholder="搜索其实很简单" />
                    <input class="submit" type="submit" value="" />
                </form>
            </div>
            <div class="login">
                <a href="login.php">登录</a>&nbsp;
                <a href="register.php">注册</a>
            </div>
        </div>
    </div>
    <div style="margin-top:55px;"></div>
    <div id="register" class="auto">
        <h2>请登录</h2>
        <form method="post">
            <label>用户名：<input type="text" name="name" /><span></span></label>
            <label>密码：<input type="password" name="pw" /><span></span></label>
            <label>验证码：<input name="vcode" type="text" /><span>*请输入下方验证码</span></label>
            <img class="vcode" src="images/show_code.jpg" />
            <label>自动登录：
                <select style="width:236px;height:25px;" name="time">
                    <option value="3600">1小时内</option>
                    <option value="86400">1天内</option>
                    <option value="259200">3天内</option>
                    <option value="2592000">30天内</option>
                </select>
                <span>*公共电脑上请勿长期自动登录</span>
            </label>
            <div style="clear:both;"></div>
            <input class="btn" type="submit" name="submit" value="登录" />
        </form>
    </div>
    <div id="footer" class="auto">
        <div class="bottom">
            <a>私房库</a>
        </div>
        <div class="copyright">Powered by sifangku ©2015 sifangku.com</div>
    </div>
</body>

</html>