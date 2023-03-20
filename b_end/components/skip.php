
<?php

function skip($result,$pic,$url){
    $html = <<<START
        <!DOCTYPE html>
        <html lang="zh-CN">
        <head>
            <meta charset="utf-8" />
            <title>后台界面</title>
            <meta http-equiv="refresh" content="3;url={$url}" />
            <meta name="description" content="跳转" />
            <link rel="stylesheet" type="text/css" href="../css/remind.css" />
            
        </head>
        <body>
        <div class="notice"><span class="pic {$pic}"></span> <a href="{$url}"> {$result}, 3s后跳转</a>
        </body>
        </html>
START;
    echo $html;
    exit();
}

// /admin/index.php, 3s后跳转