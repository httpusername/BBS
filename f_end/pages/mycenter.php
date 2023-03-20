<?php
$title='首页';
$template['css']=array('../css/member.css','../css/public.css','../css/list.css');

?>
<?php include '../components/header.php'?>

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
                <a href="member.php?id=9" target="_blank">您好！username001</a> <span style="color:#fff;">|</span> <a
                    href="logout.php">退出</a>
            </div>
        </div>
    </div>
    <div style="margin-top:55px;"></div>
    <div id="position" class="auto">
        <a href="index.php">首页</a> &gt; 孙胜利
    </div>
    <div id="main" class="auto">
        <div id="left">
            <ul class="postsList">
                <li>
                    <div class="smallPic">
                        <img width="45" height="45" src="../images/67054454c465bbd64e5413102630.gif" />
                    </div>
                    <div class="subject">
                        <div class="titleWrap">
                            <h2><a target="_blank" href="show.php?id=15">哈哈哈&lt;span&gt;11111111</a></h2>
                        </div>
                        <p>
                            <a href='content_update.php?id=15'>编辑</a> <a
                                href='confirm.php?url=content_delete.php%3Fid%3D15&return_url=%2Fmember.php%3Fid%3D1&message=你真的要删除帖子 哈哈哈&lt;span&gt;11111111 吗？'>删除</a>
                            发帖日期：2015-01-22 11:29:27&nbsp;&nbsp;&nbsp;&nbsp;最后回复：暂无
                        </p>
                    </div>
                    <div class="count">
                        <p>
                            回复<br /><span>0</span>
                        </p>
                        <p>
                            浏览<br /><span>7</span>
                        </p>
                    </div>
                    <div style="clear:both;"></div>
                </li>
                <li>
                    <div class="smallPic">
                        <img width="45" height="45" src="../images/67054454c465bbd64e5413102630.gif" />
                    </div>
                    <div class="subject">
                        <div class="titleWrap">
                            <h2><a target="_blank" href="show.php?id=9">hahah1111111</a></h2>
                        </div>
                        <p>
                            <a href='content_update.php?id=9'>编辑</a> <a
                                href='confirm.php?url=content_delete.php%3Fid%3D9&return_url=%2Fmember.php%3Fid%3D1&message=你真的要删除帖子 hahah1111111 吗？'>删除</a>
                            发帖日期：2015-01-16 19:05:45&nbsp;&nbsp;&nbsp;&nbsp;最后回复：2015-01-21 11:08:05
                        </p>
                    </div>
                    <div class="count">
                        <p>
                            回复<br /><span>18</span>
                        </p>
                        <p>
                            浏览<br /><span>623</span>
                        </p>
                    </div>
                    <div style="clear:both;"></div>
                </li>
                <li>
                    <div class="smallPic">
                        <img width="45" height="45" src="../images/67054454c465bbd64e5413102630.gif" />
                    </div>
                    <div class="subject">
                        <div class="titleWrap">
                            <h2><a target="_blank" href="show.php?id=2">11</a></h2>
                        </div>
                        <p>
                            <a href='content_update.php?id=2'>编辑</a> <a
                                href='confirm.php?url=content_delete.php%3Fid%3D2&return_url=%2Fmember.php%3Fid%3D1&message=你真的要删除帖子 11 吗？'>删除</a>
                            发帖日期：2023-03-20 18:34:55&nbsp;&nbsp;&nbsp;&nbsp;最后回复：2015-01-18 17:25:27
                        </p>
                    </div>
                    <div class="count">
                        <p>
                            回复<br /><span>3</span>
                        </p>
                        <p>
                            浏览<br /><span>0</span>
                        </p>
                    </div>
                    <div style="clear:both;"></div>
                </li>
                <li>
                    <div class="smallPic">
                        <img width="45" height="45" src="../images/67054454c465bbd64e5413102630.gif" />
                    </div>
                    <div class="subject">
                        <div class="titleWrap">
                            <h2><a target="_blank" href="show.php?id=1">11</a></h2>
                        </div>
                        <p>
                            <a href='content_update.php?id=1'>编辑</a> <a
                                href='confirm.php?url=content_delete.php%3Fid%3D1&return_url=%2Fmember.php%3Fid%3D1&message=你真的要删除帖子 11 吗？'>删除</a>
                            发帖日期：2023-03-29 18:34:40&nbsp;&nbsp;&nbsp;&nbsp;最后回复：暂无
                        </p>
                    </div>
                    <div class="count">
                        <p>
                            回复<br /><span>0</span>
                        </p>
                        <p>
                            浏览<br /><span>0</span>
                        </p>
                    </div>
                    <div style="clear:both;"></div>
                </li>
            </ul>
            <div class="pages">
                <span>1</span>
            </div>
        </div>
        <div id="right">
            <div class="member_big">
                <dl>
                    <dt>
                        <img width="180" height="180" src="../images/67054454c465bbd64e5413102630.gif" />
                    </dt>
                    <dd class="name">孙胜利</dd>
                    <dd>帖子总计：4</dd>
                </dl>
                <div style="clear:both;"></div>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>
    <div id="footer" class="auto">
        <div class="bottom">
            <a>私房库</a>
        </div>
        <div class="copyright">Powered by sifangku ©2015 sifangku.com</div>
    </div>
</body>

</html>