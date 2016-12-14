<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>学生部分首页</title>
    <link rel="stylesheet" href="/FS_siqi/Public/front/student/css/bootstrap.min.css">
    <!--<link href="css/index.css" rel="stylesheet" type="text/css"/>-->
    <!-- <link href="css/nav.css" rel="stylesheet" type="text/css"/> -->
    <!--<link href="css/indexwrite.css" rel="stylesheet" type="text/css"/>-->
    <!--<link href="css/index1024.css" rel="stylesheet" type="text/css"/>-->

    <!--新添加-->
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 800px) and (max-device-width: 1100px)" href="/FS_siqi/Public/front/student/css/index1024.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1240px) and (max-device-width: 2000px)" href="/FS_siqi/Public/front/student/css/indexwrite.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 800px) and (max-device-width: 1100px)" href="/FS_siqi/Public/front/student/css/nav1024.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1240px) and (max-device-width: 2000px)" href="/FS_siqi/Public/front/student/css/nav.css" />
</head>
<body>
<!--导航栏-->
<!--导航栏部分-->
<!--新改正-->
<div class="col-md-8 column" id="nav">
    <ul>
        <li><a href="/FS_siqi/index.php/Home/Student/index.html">首页</a></li>
        <li><a href="/FS_siqi/index.php/Home/Student/chinese.html">学习中心</a></li>
        <li><a href="/FS_siqi/index.php/Home/Student/pk.html">竞技场</a></li>
        <li><a href="/FS_siqi/index.php/Home/Student/classspace.html">班级天地</a></li>
        <li><a href="/FS_siqi/index.php/Home/Student/parentspace.html">家长空间</a></li>
        <li><a href="/FS_siqi/index.php/Home/Student/gift.html">奖品</a></li>
        <li id="email"><a href="parentspace.html"><img src="/FS_siqi/Public/front/student/images/email.png" /></a></li>
        <li id="person"><a href="personcenter.html"/> <img src="/FS_siqi/Public/front/student/images/headpic.jpg" class="img-circle" /></a></li>
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
            <div class="row clearfix">
                <!--左侧榜单-->
                <div class="col-md-4 column" id="left1024">
                    <li id="bangdan">榜单</li>
                    <HR width="70%" color=#987cb9 SIZE=8 />

                    <ul id="name">
                        <li><img src="/FS_siqi/Public/front/student/images/hands.png" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;李小明</li>
                        <li><img src="/FS_siqi/Public/front/student/images/hands.png" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;王华</li>
                        <li><img src="/FS_siqi/Public/front/student/images/hands.png" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;张丽丽</li>
                    </ul>

                    <HR width="70%" color=#987cb9 SIZE=8 />
                    <ul id="owner">

                        <li>我的学号：<a href="#">123456</a></li>
                        <li>我的星星：<a href="#">0</a></li>
                    </ul>

                </div>

                <!--右侧课程-->
                <div class="col-md-8 column">
                    <div class="row clearfix" id="right_course">
                        <div >
                            <ul>
                                <li><img src="/FS_siqi/Public/front/student/images/course.jpg" /></li>
                                <li><a href="studycontent.html"><img src="/FS_siqi/Public/front/student/images/start_study.png" /></a></li>
                            </ul>

                        </div>
                        <div >
                            <ul>
                                <li><img src="/FS_siqi/Public/front/student/images/course.jpg" /></li>
                                <li><a href="studycontent.html"><img src="/FS_siqi/Public/front/student/images/start_study.png" /></a></li>
                            </ul>
                        </div>
                        <div >
                            <ul>
                                <li><img src="/FS_siqi/Public/front/student/images/course.jpg" /></li>
                                <li><a href="studycontent.html"><img src="/FS_siqi/Public/front/student/images/start_study.png" /></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--我最棒部分-->
                    <div class="row clearfix" >
                        <div id="ibest">
                            <ul>
                                <li style=" border-color:blue;"><img src="/FS_siqi/Public/front/student/images/1.jpg" style=" float: left; padding-right:18px" class="img-rounded" /></li>
                                <li><img src="/FS_siqi/Public/front/student/images/2.jpg" class="img-rounded"style="float: left; padding-right:18px"/></li>
                                <li id="img3"><img src="/FS_siqi/Public/front/student/images/3.jpg" class="img-rounded"/></li>
                            </ul>

                        </div>
                    </div>

                    <div id="classsky"><a href="classspace.html"><img src="/FS_siqi/Public/front/student/images/classsky.png" /></a> </div>
                    <div id="parentspace"><a href="parentspace.html"><img src="/FS_siqi/Public/front/student/images/parentspace.png" /></a> </div>
                    <div id="pk"><a href="pk.html"><img src="/FS_siqi/Public/front/student/images/pk.png" /></a> </div>
                    <div id="studycenter"><a href="studycenter.html"><img src="/FS_siqi/Public/front/student/images/studycenter.png" /></a> </div>
                    <div id="gift"><a href="gift.html"><img src="/FS_siqi/Public/front/student/images/gift.png" /></a> </div>

                </div>

            </div>



        </div>
    </div>


    <!--<div class="yun1 yun"> </div>-->
    <!--<div class="yun2 yun"> </div>-->
        <div class="yun3 yun"> </div>
    <!--<div class="yun4 yun"> </div>-->

</div>
<!--页脚-->
<div class="footerimage">
<div class="footer">
    <ul>
        <li>Copyright © 2011-2016 futurestar Corporation. All Rights Reserved.</li>
        <li id="footerli">
            <a href="#">后台管理</a>
            <a href="#">关于我们</a>
            <a href="#">各界声音</a>
            <a href="#">加入我们</a>
        </li>
    </ul>

</div>
</div>
</body>






</html>