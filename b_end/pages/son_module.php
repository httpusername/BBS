<?php

$title="子板块";
$template['css']=array('../css/public.css');
?>
<?php include '../components/header.php'?>
    <div id="main">
        <div class="title">子版块列表</div>
        <form method="post">
            <table class="list">
                <tr>
                    <th>排序</th>
                    <th>版块名称</th>
                    <th>所属父版块</th>
                    <th>版主</th>
                    <th>操作</th>
                </tr>
                <tr>
                    <td><input class="sort" type="text" name="sort[2]" value="111" /></td>
                    <td>马刺[id:2]</td>
                    <td>NBA</td>
                    <td>0</td>
                    <td><a href="#">[访问]</a>&nbsp;&nbsp;<a href="son_module_update.php?id=2">[编辑]</a>&nbsp;&nbsp;<a
                            href="confirm.php?url=son_module_delete.php%3Fid%3D2&return_url=%2Fadmin%2Fson_module.php&message=你真的要删除子版块 马刺 吗？">[删除]</a>
                    </td>
                </tr>
                <tr>
                    <td><input class="sort" type="text" name="sort[5]" value="211" /></td>
                    <td>火箭[id:5]</td>
                    <td>NBA</td>
                    <td>0</td>
                    <td><a href="#">[访问]</a>&nbsp;&nbsp;<a href="son_module_update.php?id=5">[编辑]</a>&nbsp;&nbsp;<a
                            href="confirm.php?url=son_module_delete.php%3Fid%3D5&return_url=%2Fadmin%2Fson_module.php&message=你真的要删除子版块 火箭 吗？">[删除]</a>
                    </td>
                </tr>
                <tr>
                    <td><input class="sort" type="text" name="sort[1]" value="121" /></td>
                    <td>单位取得完全[id:1]</td>
                    <td>NBA</td>
                    <td>0</td>
                    <td><a href="#">[访问]</a>&nbsp;&nbsp;<a href="son_module_update.php?id=1">[编辑]</a>&nbsp;&nbsp;<a
                            href="confirm.php?url=son_module_delete.php%3Fid%3D1&return_url=%2Fadmin%2Fson_module.php&message=你真的要删除子版块 单位取得完全 吗？">[删除]</a>
                    </td>
                </tr>
                <tr>
                    <td><input class="sort" type="text" name="sort[6]" value="131" /></td>
                    <td>上海大鲨鱼[id:6]</td>
                    <td>CBA</td>
                    <td>0</td>
                    <td><a href="#">[访问]</a>&nbsp;&nbsp;<a href="son_module_update.php?id=6">[编辑]</a>&nbsp;&nbsp;<a
                            href="confirm.php?url=son_module_delete.php%3Fid%3D6&return_url=%2Fadmin%2Fson_module.php&message=你真的要删除子版块 上海大鲨鱼 吗？">[删除]</a>
                    </td>
                </tr>
                <tr>
                    <td><input class="sort" type="text" name="sort[7]" value="0" /></td>
                    <td>测试子版块[id:7]</td>
                    <td>测试</td>
                    <td>0</td>
                    <td><a href="#">[访问]</a>&nbsp;&nbsp;<a href="son_module_update.php?id=7">[编辑]</a>&nbsp;&nbsp;<a
                            href="confirm.php?url=son_module_delete.php%3Fid%3D7&return_url=%2Fadmin%2Fson_module.php&message=你真的要删除子版块 测试子版块 吗？">[删除]</a>
                    </td>
                </tr>
            </table>
            <input style="margin-top:20px;cursor:pointer;" class="btn" type="submit" name="submit" value="排序" />
        </form>
    </div>
</body>

</html>