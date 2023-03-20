<?php
$title="父板块";
$template['css']=array('../css/public.css');
include '../config.php';
include '../util/util.php';
include '../components/skip.php';
$link=connect();
?>
    <?php include '../components/header.php'?>
    <div id="main">

        <div class="title">父版块列表</div>
        <form method="post">
            <table class="list">
                <tr>
                    <th>排序</th>
                    <th>版块名称</th>
                    <th>操作</th>
                </tr>

                <?php
                    $url='father_module_delete.php';

                    $query="select * from sfk_father_module";
                    $result=execute($link,$query);
                    if(mysqli_affected_rows($link)) {
                        while($data=mysqli_fetch_array($result)) {
    $html=<<<START
                            <tr>
                                <td><input class="sort" type="text" name="" value="{$data['id']}" /></td>
                                <td>{$data['module_name']} [id:{$data['id']} ]</td>
                                <td>
                                    <a href="#">[访问]</a>&nbsp;&nbsp;
                                    <a href="./edit_father_module.php?id={$data['id']}">[编辑]</a>&nbsp;&nbsp;
                                      <a href="../components/confirm_father_module.php?id='{$data['id']}'&father_module_name='{$data["module_name"]}'&url=$url">[删除]</a>
                                </td>
                            </tr>
START;
                            echo $html;
                        }
                    }
                ?>

            </table>
            <input style="margin-top:20px;cursor:pointer;" class="btn" type="submit" name="submit" value="排序" />
        </form>
    </div>
</body>

</html>