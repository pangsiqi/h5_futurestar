<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>x学习中心</title>
    <link rel="stylesheet" href="/FS/Public/front/student/css/bootstrap.min.css">
    <!--新添加-->
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 800px) and (max-device-width: 1100px)" href="/FS/Public/front/student/css/chinese1024.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1240px) and (max-device-width: 2000px)" href="/FS/Public/front/student/css/chinese.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 800px) and (max-device-width: 1100px)" href="/FS/Public/front/student/css/nav1024.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1240px) and (max-device-width: 2000px)" href="/FS/Public/front/student/css/nav.css" />
</head>

<body>
    <!--导航栏部分-->
    <div class="col-md-8" id="nav">
        <ul>
            <li><a href="/FS/index.php/Home/Student/index.html">首页</a></li>
            <li><a href="/FS/index.php/Home/Student/studycenter.html">学习中心</a></li>
            <li><a href="/FS/index.php/Home/Student/pk.html">竞技场</a></li>
            <li><a href="/FS/index.php/Home/Student/classspace.html">班级天地</a></li>
            <li><a href="/FS/index.php/Home/Student/parentspace.html">家长空间</a></li>
            <li><a href="/FS/index.php/Home/Student/gift.html">奖品</a></li>
            <li>
                <a href="#"><img src="/FS/Public/front/student/images/email.png" /></a>
            </li>
            <li><a href="/FS/index.php/Home/Student/personcenter"><img src="<?php echo ($current["thumb"]); ?>" class="nav-img img-circle" /></a>
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
                    <!--左侧内容-->
                    <div id="nav2">
                        <div id="chinese"><a href="/FS/index.php/Home/Student/chinese/id/1">语文印象</a></div>
                        <div id="math"><a href="/FS/index.php/Home/Student/chinese/id/2">数学印象</a></div>
                        <div id="english"><a href="/FS/index.php/Home/Student/chinese/id/3">英语印象</a></div>
                        <div id="walk"><a href="/FS/index.php/Home/Student/walktolisten.html">随身听</a></div>
                        <div id="garden"><a href="/FS/index.php/Home/Student/classgarden.html">课外乐园</a></div>
                    </div>
                    <!--右侧内容-->
                    <div class="row clearfix">
                        <div class="col-md-2"></div>
                        <div class="col-md-8" id="rightcontent">
                            <div id="title">
                                <ul>
                                    <a href="/FS/index.php/Home/Student/index.html">首页</a> / <a href="/FS/index.php/Home/Student/studycenter.html">学习中心</a>
                                </ul>
                            </div>
                            <div id="studycontent">
                            <?php if(is_array($courses)): $i = 0; $__LIST__ = $courses;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$course): $mod = ($i % 2 );++$i;?><div>
                                    <div class="col-md-2 column">
                                        <div id="images"><!-- <img src="/FS/Public/front/student/images/list_book.jpg" style="border-radius: 10px;" /> --></div>
                                    </div>
                                    <div class="col-md-9 column" id="content">
                                        <ul>
                                            <li><h4>课程内容：<?php echo ($course["title"]); ?></h4></li>
                                            <HR width="100%" color=#987cb9 SIZE=8 />
                                            <li>课程描述：<?php echo ($course["detail"]); ?></li>
                                            
                                            <li><a href="#">开始时间：<?php echo (substr($course["starttime"],0,10)); ?></a></li>
                                            <li><a href="#">截止时间：<?php echo (substr($course["endtime"],0,10)); ?></a></li>
                                            
                                            <li>完成情况：未完成&nbsp<span class="glyphicon glyphicon-remove"></span></li>
                                            <li style="float: right; margin-top:-51px;margin-right: 11px;">
                                                <a href="/FS/index.php/Home/Student/studycontent/id/<?php echo ($course["homeworkid"]); ?>">
                                                    <button type="button" class="btn btn-info">开始作业</button>
                                                </a>
                                            </li>
                                        </ul>

                                    </div><HR width="100%" color=#987cb9 SIZE=8 style="margin-top: 5px;margin-bottom: 0px;" />
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--页脚-->
    <div class="row clearfix" style="margin-top: 20px;">
        <div class="col-md-12">
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
        </div>
    </div>
</body>

</html>