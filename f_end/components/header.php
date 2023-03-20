
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <title><?php echo $title ?></title>
    <meta name="keywords" content="私房库,私房库111" />
    <meta name="description" content="私房库私房库私房库私房库私房库私房库私房库私房库私房库私房库私房库私房库私房库11" />
    <?php
        foreach ($template['css'] as $key=>$val){
            echo "<link rel='stylesheet' type='text/css' href='{$val}' />";
        }
    ?>
<body>
<div class="header_wrap">
    <div id="header" class="auto">
        <div class="logo">sifangku</div>
        <div class="nav">
            <a class="hover" href="index.php">首页</a>
        </div>
        <div class="serarch">
            <form action="search.php" method="get">
                <input class="keyword" type="text" name="keyword" value="" placeholder="搜索其实很简单" />
                <input class="submit" type="submit" value="" />
            </form>
        </div>
        <div class="login">
            <a href="login.php">登录</a>&nbsp;
            <a href="register.php">注册</a>
        </div>
    </div>
</div>