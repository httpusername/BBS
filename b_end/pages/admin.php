<?php

$title="管理员列表";
$template['css']=array('../css/public.css');
?>
<?php include '../components/header.php'?>

    <div id="main">
        <div class="title">管理员列表</div>
        <table class="list">
            <tr>
                <th>名称</th>
                <th>等级</th>
                <th>创建日期</th>
                <th>操作</th>
            </tr>
            <tr>
                <td>admin [id:1]</td>
                <td>超级管理员</td>
                <td>2015-01-26 12:15:40</td>
                <td><a
                        href="confirm.php?url=manage_delete.php%3Fid%3D1&return_url=%2Fadmin%2Fmanage.php&message=你真的要删除管理员 admin 吗？">[删除]</a>
                </td>
            </tr>
            <tr>
                <td>孙胜利 [id:4]</td>
                <td>普通管理员</td>
                <td>2015-01-26 18:26:54</td>
                <td><a
                        href="confirm.php?url=manage_delete.php%3Fid%3D4&return_url=%2Fadmin%2Fmanage.php&message=你真的要删除管理员 孙胜利 吗？">[删除]</a>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>