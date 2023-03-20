<?php

$title="网站设置";
$template['css']=array('../css/public.css');
?>
<?php include '../components/header.php'?>
    <div id="main">
        <div class="title" style="margin-bottom:20px;">网站设置</div>
        <form method="post">
            <table class="au">
                <tr>
                    <td>网站标题</td>
                    <td><input name="title" type="text" value="sfkbbs" /></td>
                    <td>
                        就是前台页面的标题
                    </td>
                </tr>
                <tr>
                    <td>关键字</td>
                    <td><input name="keywords" type="text" value="私房库,私房库111" /></td>
                    <td>
                        关键字
                    </td>
                </tr>
                <tr>
                    <td>描述</td>
                    <td>
                        <textarea name="description">私房库私房库私房库私房库私房库私房库私房库私房库私房库私房库私房库私房库私房库11</textarea>
                    </td>
                    <td>
                        描述
                    </td>
                </tr>
            </table>
            <input style="margin-top:20px;cursor:pointer;" class="btn" type="submit" name="submit" value="设置" />
        </form>
    </div>
</body>

</html>