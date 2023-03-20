<?php
$title="添加父板块";
$template['css']=array('../css/public.css');

include_once '../components/skip.php';
include_once '../config.php';
include_once '../util/util.php';

$link=connect();
/**
 *
 *
 * 参数 module_name, sort
 */
$flag='add';
include_once '../validate/validate_add_father_module.php';


?>
<?php include '../components/header.php'?>
    <div id="main">
        <div class="title" style="margin-bottom:20px;">修改父版块 - NBA</div>
        <form method="post">
            <table class="au">
                <tr>
                    <td>版块名称</td>
                    <td><input name="module_name" value="NBA" type="text" /></td>
                    <td>
                        版块名称不得为空，最大不得超过66个字符
                    </td>
                </tr>
                <tr>
                    <td>排序</td>
                    <td><input name="sort" value="2" type="text" /></td>
                    <td>
                        填写一个数字即可
                    </td>
                </tr>
            </table>
            <input style="margin-top:20px;cursor:pointer;" class="btn" type="submit" name="submit" value="修改" />
        </form>
    </div>
</body>
</html>