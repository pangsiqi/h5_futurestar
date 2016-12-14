<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>随身听</title>
    <link rel="stylesheet" href="/FS_siqi/Public/front/student/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 800px) and (max-device-width: 1100px)" href="/FS_siqi/Public/front/student/css/chinese1024.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1240px) and (max-device-width: 2000px)" href="/FS_siqi/Public/front/student/css/chinese.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 800px) and (max-device-width: 1100px)" href="/FS_siqi/Public/front/student/css/nav1024.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1240px) and (max-device-width: 2000px)" href="/FS_siqi/Public/front/student/css/nav.css" />

</head>
<body>
<!--导航栏部分-->
<div class="col-md-12 col-lg-8" id="nav">
    <ul>
        <li><a href="/FS_siqi/index.php/Home/Student/index.html">首页</a></li>
        <li><a href="/FS_siqi/index.php/Home/Student/chinese.html">学习中心</a></li>
        <li><a href="/FS_siqi/index.php/Home/Student/pk.html">竞技场</a></li>
        <li><a href="/FS_siqi/index.php/Home/Student/classspace.html">班级天地</a></li>
        <li><a href="/FS_siqi/index.php/Home/Student/parentspace.html">家长空间</a></li>
        <li><a href="/FS_siqi/index.php/Home/Student/gift.html">奖品</a></li>
        <li><a href="#"><img src="/FS_siqi/Public/front/student/images/email.png" /></a></li>
        <li><img src="/FS_siqi/Public/front/student/images/headpic.jpg" class="img-circle" />
            <!-- <ul>
                 <li><a href="#">个人信息</a></li>
                 <li><a href="#">上传</a></li>
                 <li><a href="#">退出</a></li>
             </ul>-->
        </li>
    </ul>

</div>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="row clearfix">
                <div class="col-md-2 column">

                </div>

            </div>
            <!--左侧内容-->
            <div id="nav2">
                        <div id="chinese"><a href="/FS_siqi/index.php/Home/Student/chinese/id/1">语文印象</a></div>
                        <div id="math"><a href="/FS_siqi/index.php/Home/Student/chinese/id/2">数学印象</a></div>
                        <div id="english"><a href="/FS_siqi/index.php/Home/Student/chinese/id/3">英语印象</a></div>
                        <div id="walk"><a href="/FS_siqi/index.php/Home/Student/walktolisten.html">随身听</a></div>
                        <div id="garden"><a href="/FS_siqi/index.php/Home/Student/classgarden.html">课外乐园</a></div>
                    </div>
            <!--右侧内容-->
            <div class="row clearfix">
                <div id="rightcontent">
                    <div id="title">
                        <ul>
                            <a href="/FS_siqi/index.php/Home/Student/index.html">首页</a> / <a href="/FS_siqi/index.php/Home/Student/chinese.html">学习中心</a> / <a href="/FS_siqi/index.php/Home/Student/pk.html"><?php echo ($course["subject"]); ?></a>
                        </ul>
                    </div>

                    <div id="studycontent">
                        <div id="1">
                            <div class="col-md-2 column">
                                <div style=" width: 150px;margin-top: 18px; margin-left: 50px; border:2px rgb(44,183,192) solid; border-radius: 10px;"><img src="/FS_siqi/Public/front/student/images/garden_book.jpg" style="border-radius: 10px;" /></div>
                            </div>
                            <div class="col-md-8 column" style="margin-left: 100px;">
                                <ul>
                                    <li>课程内容：<a href="#"><?php echo ($course["title"]); ?></a></li>
                                    

                                    <li>课程描述：<?php echo ($course["details"]); ?></li>
                                    <li>上传时间：<?php echo (substr($course["starttime"],0,10)); ?></li>
                                    <li>截止时间：<?php echo (substr($course["starttime"],0,10)); ?></li>
                                    <li>完成情况：未收听</li>
                                    <li style="float: right; margin-top:-51px;margin-right: 11px;"><a href="studycontent.html"><button type="button" class="btn btn-info">开始学习</button></a></li>

                                </ul>
                            </div>
                        </div>
                        <HR width="100%" color=#987cb9 SIZE=8 />
                        <div id="2">
                            <div class="col-md-2 column">
                                <div style=" width: 150px;margin-top: 15px; margin-left: 50px; border:2px rgb(44,183,192) solid; border-radius: 10px;"><img src="/FS_siqi/Public/front/student/images/garden_book.jpg" style="border-radius: 10px;" /></div>
                            </div>
                            <div class="col-md-8 column" style="margin-left: 100px;">
                                <ul>
                                    <li>课程内容：<a href="#"><?php echo ($course["title"]); ?></a></li>
                                    

                                    <li>课程描述：<?php echo ($course["details"]); ?></li>
                                    <li>上传时间：<?php echo (substr($course["starttime"],0,10)); ?></li>
                                    <li>截止时间：<?php echo (substr($course["starttime"],0,10)); ?></li>
                                    <li>完成情况：未收听</li>
                                    <li style="float: right; margin-top:-51px;margin-right: 11px;"><a href="studycontent.html"><button type="button" class="btn btn-info">开始学习</button></a></li>

                                </ul>
                            </div>
                        </div>
                        <HR width="100%" color=#987cb9 SIZE=8 />
                        <div id="3">
                            <div class="col-md-2 column">
                                <div style=" width: 150px;margin-top: 15px; margin-left: 50px; border:2px rgb(44,183,192) solid; border-radius: 10px;"><img src="/FS_siqi/Public/front/student/images/garden_book.jpg" style="border-radius: 10px;" /></div>
                            </div>
                            <div class="col-md-8 column" style="margin-left: 100px;">
                                <ul>
                                    <li>课程内容：<a href="#"><?php echo ($course["title"]); ?></a></li>
                                    

                                    <li>课程描述：<?php echo ($course["details"]); ?></li>
                                    <li>上传时间：<?php echo (substr($course["starttime"],0,10)); ?></li>
                                    <li>截止时间：<?php echo (substr($course["starttime"],0,10)); ?></li>
                                    <li>完成情况：未收听</li>
                                    <li style="float: right; margin-top:-51px;margin-right: 11px;"><a href="studycontent.html"><button type="button" class="btn btn-info">开始学习</button></a></li>

                                </ul>
                            </div>
                        </div>
                       
                       


                    </div>

                </div>

            </div>



        </div>
    </div>
</div>
<!--页脚-->
<div class="footer">
    <ul>
        <li>Copyright © 2011-2016 futurestar Corporation. All Rights Reserved.</li>
        <div>
            <li id="footerli">
                <a href="/FS_siqi/index.php/admin">后台管理</a>
                <a href="#">关于我们</a>
                <a href="#">各界声音</a>
                <a href="#">加入我们</a>
            </li></div>
    </ul>

</div>
</body>
</html>