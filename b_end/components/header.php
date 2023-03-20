
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8" />
    <title><?php echo $title ?></title>
    <meta name="keywords" content="后台界面" />
    <meta name="description" content="后台界面" />
    <?php
        foreach($template['css'] as $key=>$val){
            echo "<link rel='stylesheet' type='text/css' href='{$val}' />";
        }
    ?>
</head>

<body>
<div id="top">
    <div class="logo">
        管理中心
    </div>
    <ul class="nav">
        <li><a href="#" target="_blank">私房库</a></li>
        <li><a href="#" target="_blank">私房库</a></li>
    </ul>
    <div class="login_info">
        <a target="_blank" href="../index.php" style="color:#fff;">网站首页</a>&nbsp;|&nbsp;
        管理员：admin <a href="logout.php">[注销]</a>
    </div>
</div>
<div id="sidebar">

    <ul>
        <li>
            <div class="small_title">系统</div>
            <ul class="child">
                <li><a href="index.php">系统信息</a></li>
                <li><a href="manage.php">管理员</a></li>
                <li><a href="manage_add.php">添加管理员</a></li>
                <li><a href="web_set.php">站点设置</a></li>
            </ul>
        </li>
        <li><!--  class="current" -->
            <div class="small_title">内容管理</div>
            <ul class="child">
                <li><a <?php if(basename($_SERVER['SCRIPT_NAME'],'.php') == 'father_module') { echo "class=current"; } ?> href="../pages/father_module.php">父板块列表</a></li>
                <li><a <?php if(basename($_SERVER['SCRIPT_NAME'],'.php') == 'add_father_module') { echo "class=current"; } ?> href="../pages/add_father_module.php">添加父板块</a></li>
                <li><a <?php if(basename($_SERVER['SCRIPT_NAME'],'.php') == 'edit_father_module') { echo "class=current"; } ?> href="../pages/edit_father_module.php">修改父板块</a></li>
                <li><a <?php if(basename($_SERVER['SCRIPT_NAME'],'.php') == 'son_module') { echo "class=current"; } ?> href="../pages/son_module.php">子板块列表</a></li>
                <li><a <?php if(basename($_SERVER['SCRIPT_NAME'],'.php') == 'add_son_module') { echo "class=current"; } ?> href="../pages/add_son_module.php">添加子板块</a></li>
                <li><a <?php if(basename($_SERVER['SCRIPT_NAME'],'.php') == 'edit_son_module') { echo "class=current"; } ?> href="../pages/edit_son_module.php">修改子板块</a></li>
                <li><a <?php if(basename($_SERVER['SCRIPT_NAME'],'.php') == 'father_module') { echo "class=current"; } ?> target="_blank" href="">帖子管理</a></li>
            </ul>
        </li>
        <li>
            <div class="small_title">用户管理</div>
            <ul class="child">
                <li><a href="#">用户列表</a></li>
            </ul>
        </li>
    </ul>
</div>
