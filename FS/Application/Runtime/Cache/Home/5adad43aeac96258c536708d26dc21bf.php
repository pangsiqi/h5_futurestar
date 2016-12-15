<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>竞技场</title>
    <link rel="stylesheet" href="/FS/Public/front/student/css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 800px) and (max-device-width: 1100px)" href="/FS/Public/front/student/css/nav1024.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1240px) and (max-device-width: 2000px)" href="/FS/Public/front/student/css/nav.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 800px) and (max-device-width: 1100px)" href="/FS/Public/front/student/css/chinese1024.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1240px) and (max-device-width: 2000px)" href="/FS/Public/front/student/css/chinese.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 800px) and (max-device-width: 1100px)" href="/FS/Public/front/student/css/studycontent1024.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1240px) and (max-device-width: 2000px)" href="/FS/Public/front/student/css/studycontent.css" />
     
 
  </head>

<body>
    <!--导航栏部分-->
    <div class="col-md-12 col-lg-8" id="nav">
        <ul>
            <li><a href="/FS/index.php/Home/Student/index.html">首页</a></li>
            <li><a href="/FS/index.php/Home/Student/chinese.html">学习中心</a></li>
            <li><a href="/FS/index.php/Home/Student/pk.html">竞技场</a></li>
            <li><a href="/FS/index.php/Home/Student/classspace.html">班级天地</a></li>
            <li><a href="/FS/index.php/Home/Student/parentspace.html">家长空间</a></li>
            <li><a href="/FS/index.php/Home/Student/gift.html">奖品</a></li>
            <li>
                <a href="#"><img src="/FS/Public/front/student/images/email.png" /></a>
            </li>
            <li><a href="/FS/index.php/Home/Student/personcenter"><img src="<?php echo ($current["thumb"]); ?>" class="nav-img img-circle"/></a>
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
                <!--右侧内容-->
                <div class="row clearfix">
                    <div id="rightcontent">
                        <div id="title">
                            <ul><a href="#">竞技场</a></ul>
                        </div>
                        <div id="studycontent">
                            <div id="video">
                                <!-- <embed src="/FS/Public/front/student/resource/shuxue1.swf" height="494" width="794" style="border-radius: 5px;" /> -->
                                <!--/*控制播放和暂停*/-->
                                <embed src="/FS/Public/front/student/resource/~68.swf"  class="shipin" style="z-index: 1" />
                            </div>
                            <HR width="100%" color=#fff SIZE=8 />
                            <div id="play" style="z-index: -1">
                                <!--<img src="/FS/Public/front/student/images/play.png" />-->
                            </div>
                            <!--推荐内容-->
                            <div id="other">
                                <div>
                                    <a href="#"><img src="/FS/Public/front/student/images/better_content.png" /></a>
                                </div>
                                <div>
                                    <a href="#"><img src="/FS/Public/front/student/images/course.jpg" /></a>
                                </div>
                                <div>
                                    <a href="#"><img src="/FS/Public/front/student/images/course.jpg" /></a>
                                </div>
                                <div>
                                    <a href="#"><img src="/FS/Public/front/student/images/course.jpg" /></a>
                                </div>
                                <div>
                                    <a href="#"><img src="/FS/Public/front/student/images/course.jpg" /></a>
                                </div>
                                <div>
                                    <a href="#"><img src="/FS/Public/front/student/images/course.jpg" /></a>
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
                    <a href="/FS/index.php/admin">后台管理</a>
                    <a href="#">关于我们</a>
                    <a href="#">各界声音</a>
                    <a href="#">加入我们</a>
                </li>
            </div>
        </ul>
    </div>
</body>

</html>