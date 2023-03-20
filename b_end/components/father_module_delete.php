<?php
include '../config.php';
include '../util/util.php';
include './skip.php';
$link=connect();
/**
 * 参数id
 */
if(!isset($_GET['id'])) {
    skip('参数不合法', 'error', '../pages/father_module.php');
}
/**
 * 检查id是否存在于数据库中
 */
if($_GET>num($link,'select * from sfk_father_module')) {
    skip('参数id不存在', 'error', '../pages/father_module.php');
}
/**
 * 删除数据
 */
$query="delete from sfk_father_module where id={$_GET['id']}";
execute($link,$query);

if(mysqli_affected_rows($link)==1){
    skip('删除成功', 'ok', '../pages/father_module.php');
}else {
    skip('删除失败,请重试', 'error', '../pages/father_module.php');
}

