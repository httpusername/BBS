<?php
$title='帖子发布页';
$template['css']=array('../css/publish.css','../css/public.css');

?>
<?php include '../components/header.php'?>
    <div style="margin-top:55px;"></div>
    <div id="position" class="auto">
        <a href="index.php">首页</a> &gt; 发布帖子
    </div>
    <div id="publish">
        <form method="post">
            <select name="module_id">
                <option value='-1'>请选择一个子版块</option>
                <optgroup label='CBA'>
                    <option value='6'>上海大鲨鱼</option>
                </optgroup>
                <optgroup label='NBA'>
                    <option value='5'>火箭</option>
                    <option value='1'>单位取得完全</option>
                    <option selected='selected' value='2'>马刺</option>
                </optgroup>
                <optgroup label='军事资讯'></optgroup>
                <optgroup label='测试'>
                    <option value='7'>测试子版块</option>
                </optgroup>
            </select>
            <input class="title" placeholder="请输入标题" name="title" type="text" />
            <textarea name="content" class="content"></textarea>
            <input class="publish" type="submit" name="submit" value="" />
            <div style="clear:both;"></div>
        </form>
    </div>
    <div id="footer" class="auto">
        <div class="bottom">
            <a>私房库</a>
        </div>
        <div class="copyright">Powered by sifangku ©2015 sifangku.com</div>
    </div>
</body>

</html>