<?php

$title="添加管理员";
$template['css']=array('../css/public.css');
?>
<?php include '../components/header.php'?>
    <div id="main">
        <div class="title" style="margin-bottom:20px;">添加管理员</div>
        <form method="post">
            <table class="au">
                <tr>
                    <td>管理员名称</td>
                    <td><input name="name" type="text" /></td>
                    <td>
                        名称不得为空，不得超过32个字符
                    </td>
                </tr>
                <tr>
                    <td>密码</td>
                    <td><input name="pw" type="text" /></td>
                    <td>
                        不能少于6位
                    </td>
                </tr>
                <tr>
                    <td>等级</td>
                    <td>
                        <select name="level">
                            <option value="1">普通管理员</option>
                            <option value="0">超级管理员</option>
                        </select>
                    </td>
                    <td>
                        默认为普通管理员（不具备，后台管理员管理权限）
                    </td>
                </tr>
            </table>
            <input style="margin-top:20px;cursor:pointer;" class="btn" type="submit" name="submit" value="添加" />
        </form>
    </div>
</body>

</html>