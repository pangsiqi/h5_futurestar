<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>学生部分首页</title>
    <link rel="stylesheet" href="/FS/Public/front/student/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 800px) and (max-device-width: 1100px)" href="/FS/Public/front/student/css/index1024.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1240px) and (max-device-width: 2000px)" href="/FS/Public/front/student/css/indexwrite.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 800px) and (max-device-width: 1100px)" href="/FS/Public/front/student/css/nav1024.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1240px) and (max-device-width: 2000px)" href="/FS/Public/front/student/css/nav.css" />
    
</head>

<body>
    <!--导航栏-->
    <!--导航栏部分-->
    <div class="col-md-8 column" id="nav">
        <ul>
            <li><a href="/FS/index.php/Home/Student/index.html">首页</a></li>
            <li><a href="/FS/index.php/Home/Student/chinese.html">学习中心</a></li>
            <li><a href="/FS/index.php/Home/Student/pk.html">竞技场</a></li>
            <li><a href="/FS/index.php/Home/Student/classspace.html">班级天地</a></li>
            <li><a href="/FS/index.php/Home/Student/parentspace.html">家长空间</a></li>
            <li><a href="/FS/index.php/Home/Student/gift.html">奖品</a></li>
            <li id="email">
                <a href="parentspace.html"><img src="/FS/Public/front/student/images/email.png" /></a>
            </li>
            <li id="person"><a href="/FS/index.php/Home/Student/personcenter"><img src="<?php echo ($current["thumb"]); ?>" class="nav-img img-circle"/></a>
            </li>
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
                    <div class="col-md-4 column">
                        <li id="bangdan">榜单</li>
                        <HR width="70%" color=#987cb9 SIZE=8 />
                        <ul id="name">
                            <?php if(is_array($stu)): $i = 0; $__LIST__ = $stu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?><li><img src="/FS/Public/front/student/images/hands.png" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($s["realname"]); ?> <?php echo ($s["starnum"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        <HR width="70%" color=#987cb9 SIZE=8 />
                        <ul id="owner">
                            <li>我的学号：<a href="#"><?php echo ($current["id"]); ?></a></li>
                            <li>我的星星：<a href="#"><?php echo ($current["starnum"]); ?></a></li>
                        </ul>
                    </div>
                    <!--右侧课程-->
                    <div class="col-md-8 column">
                        <div class="row clearfix" id="right_course">
                            <?php if(is_array($homework)): $i = 0; $__LIST__ = $homework;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><div>
                                    <ul>
                                        <li class="resource-img"><embed src="<?php echo ($r["path"]); ?>"></li>
                                        <li class="start-img">
                                            <a href="/FS/index.php/Home/Student/studycontent/id/<?php echo ($r["homeworkid"]); ?>"><img src="/FS/Public/front/student/images/start_study.png" /></a>
                                        </li>
                                    </ul>
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                        <!--我最棒部分-->
                        <div class="row clearfix">
                            <div id="ibest">
                                <ul>
                                    <li style=" border-color:blue;"><img src="/FS/Public/front/student/images/1.jpg" style=" float: left; padding-right:18px" class="img-rounded" /></li>
                                    <li><img src="/FS/Public/front/student/images/2.jpg" class="img-rounded" style="float: left; padding-right:18px" /></li>
                                    <li id="img3"><img src="/FS/Public/front/student/images/3.jpg" class="img-rounded" /></li>
                                </ul>
                            </div>
                        </div>
                        <div id="classsky">
                            <a href="/FS/index.php/Home/Student/classspace.html"><img src="/FS/Public/front/student/images/classsky.png" /></a>
                        </div>
                        <div id="parentspace">
                            <a href="/FS/index.php/Home/Student/parentspace.html"><img src="/FS/Public/front/student/images/parentspace.png" /></a>
                        </div>
                        <div id="pk">
                            <a href="/FS/index.php/Home/Student/pk.html"><img src="/FS/Public/front/student/images/pk.png" /></a>
                        </div>
                        <div id="studycenter">
                            <a href="/FS/index.php/Home/Student/studycontent.html"><img src="/FS/Public/front/student/images/studycenter.png" /></a>
                        </div>
                        <div id="gift">
                            <a href="/FS/index.php/Home/Student/gift.html"><img src="/FS/Public/front/student/images/gift.png" /></a>
                        </div>
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
                    <a href="/FS/index.php/admin">后台管理</a>
                    <a href="#">关于我们</a>
                    <a href="#">各界声音</a>
                    <a href="#">加入我们</a>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>