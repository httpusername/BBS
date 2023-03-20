<?php
$title='注册';
$template['css']=array('../css/register.css','../css/public.css');
?>
<?php include '../components/header.php'?>
    <div style="margin-top:55px;"></div>
    <div id="register" class="auto">
        <h2>欢迎注册成为 私房库会员</h2>
        <form method="post">
            <label>用户名：<input type="text" name="name" /><span>*用户名不得为空，并且长度不得超过32个字符</span></label>
            <label>密码：<input type="password" name="pw" /><span>*密码不得少于6位</span></label>
            <label>确认密码：<input type="password" name="confirm_pw" /><span>*请输入与上面一致</span></label>
            <label>验证码：<input name="vcode" name="vocode" type="text" /><span>*请输入下方验证码</span></label>
            <img class="vcode" src="../images/show_code.jpg" />
            <div style="clear:both;"></div>
            <input class="btn" name="submit" type="submit" value="确定注册" />
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