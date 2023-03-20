<?php

if(isset($_POST['submit'])) {
    if(empty($_POST['module_name'])) {
        skip('板块名称不能为空', 'error', '../pages/add_father_module.php');
    }
    if(mb_strlen($_POST['module_name'])>66) {
        skip('板块名称长度不能大于66个字符', 'error', '../pages/add_father_module.php');
    }
    if(!is_numeric($_POST['sort'])) {
        skip('排序字段不合法', 'error', '../pages/add_father_module.php');
    }

    $_POST=escape($link,$_POST);

    switch ($flag){
        case 'add':
            /**
             * 查询是否有重新的主版块名称
             *
             */
            $sql="select * from sfk_father_module where module_name='{$_POST['module_name']}'";
            $res=execute($link,$sql);
            if(mysqli_fetch_assoc($res)){
                skip('板块名称重复,请重新输入', 'error','../pages/add_father_module.php');
            }
            /**
             * 插入新数据.
             */
            $query="insert into sfk_father_module(module_name,sort) values ('{$_POST['module_name']}', '{$_POST['sort']}')";
            $result=execute($link,$query);
            if(mysqli_affected_rows($link)==1) {
                skip('添加成功', 'ok', '../pages/add_father_module.php');
            }else {
                skip('添加失败', 'err', '../pages/add_father_module.php');
            }
        break;

        case 'edit':
            /**
             * 查询是否有对应的板块
             *
             */
            $sql="select * from sfk_father_module where module_name='{$_POST['module_name']}'";
            $res=execute($link,$sql);
            if(!mysqli_fetch_assoc($res)){
                skip('板块不存在', 'error','../pages/add_father_module.php');
            }
            /**
             * 修改数据.
             */
            $query="update sfk_father_module set module_name='{$_POST['module_name']}',sort='{$_POST['sort']}')";
            $result=execute($link,$query);
            if(mysqli_affected_rows($link)==1) {
                skip('修改成功', 'ok', '../pages/add_father_module.php');
            }else {
                skip('修改失败', 'err', '../pages/add_father_module.php');
            }
        break;

        default:
            skip('?', 'error', '../pages/father_module.php');
    }

}