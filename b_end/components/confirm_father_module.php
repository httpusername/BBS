<?php
include_once './skip.php';
/**
 * id,url
 * 检测id是否是数字，数字字符串
 */
if(!isset($_GET['id']) || !is_numeric($_GET['id']) || !isset($_GET['url']) || !isset($_GET['father_module_name'])) {
    skip('参数不合法', 'error', '../pages/father_module.php');
}

?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>  <meta charset="utf-8" />
  <title>确认页</title>
  <meta name="keywords" content="确认页" />
  <meta name="description" content="确认页" />
  <link rel="stylesheet" type="text/css" href="../css/remind.css" />
</head>
<body>
<div class="notice">
    <span class="pic ask"></span> 你真的要删除父版块 <?php echo $_GET['father_module_name'] ?>   吗？
    <a style="color:red;" href="./<?php echo $_GET['url'].'?id='.$_GET['id'] ?>">确定</a> | <a style="color:#666;" href="/admin/father_module.php">取消</a></div>
</body>
</html>

<?php
var_dump($_GET);