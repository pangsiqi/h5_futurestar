<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>家长空间</title>
    <link rel="stylesheet" href="/FS/Public/front/student/css/bootstrap.min.css">
    <!-- <link href="/FS/Public/front/student/css/nav.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="/FS/Public/front/student/css/parentspace.css" rel="stylesheet" type="text/css" /> -->


    <!--新添加-->
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 800px) and (max-device-width: 1100px)" href="/FS/Public/front/student/css/parentspace1024.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1240px) and (max-device-width: 2000px)" href="/FS/Public/front/student/css/parentspace.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 800px) and (max-device-width: 1100px)" href="/FS/Public/front/student/css/nav1024.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1240px) and (max-device-width: 2000px)" href="/FS/Public/front/student/css/nav.css" />
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
            <li><img src="/FS/Public/front/student/images/headpic.jpg" class="img-circle" />
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
                <!--内容部分-->
                <div class="container">
                    <div class="row clearfix">
                        <div id="parenthead"><img src="/FS/Public/front/student/images/parenthead.png" class="img-circle" /></div>
                        <div id="name">
                            <h1><?php echo ($current["realname"]); ?></h1> 学号：<?php echo ($current["id"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;
                            <span>学校：<?php echo ($current["school"]); ?></span>
                        </div>
                        <p>与老师交流</p>
                        <form method="post" action="/FS/index.php/Home/Student/addMessage">
                            <div id="send">
                                <div id="seriesline">
                                    <!-- <textarea type="text" style="width:1020px;height:230px"></textarea> -->
                                    <div class="Input_text" contenteditable='true'></div>
                                    <input type="hidden" name="message" class="message-content">
                                </div>
                                <div id="left">
                                    <span class="imgBtn"><img src="/FS/Public/front/student/images/face.jpg" />&nbsp;&nbsp;表情</span><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="/FS/Public/front/student/images/pic.jpg" />&nbsp;&nbsp;图片</span><span class="right"><input type="submit" class="btn btn-warning send-btn" value="发送"></span>
                                </div>
                                <div class="faceDiv"> </div>
                            </div>
                        </form>
                        <div id="p2">
                            <p>和老师的聊天记录全在这里啦</p>
                        </div>
                        ·
                        <div id="message">
                            <div id="jp-container" class="jp-container">
                                <?php if(is_array($message)): $i = 0; $__LIST__ = $message;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mr): $mod = ($i % 2 );++$i;?><div class="talk_recordboxme">
                                        <div class="user"><img src="/FS/Public/front/student/images/15.jpg" /></div>
                                        <div class="talk_recordtextbg">&nbsp;</div>
                                        <div class="talk_recordtext">
                                            <h3><?php echo ($mr["parentcontent"]); ?></h3>
                                            <span class="talk_time"><?php $parenttime=$mr.parenttime; echo date("Y-m-d H:i:s",$parenttime)?></span>
                                        </div>
                                    </div>
                                    <div class="talk_recordbox">
                                        <div class="user"><img src="/FS/Public/front/student/images/14.jpg" /></div>
                                        <div class="talk_recordtextbg">&nbsp;</div>
                                        <div class="talk_recordtext">
                                            <h3><?php echo ($mr["teachercontent"]); ?></h3>
                                            <span class="talk_time"><?php $teachertime=$mr.teachertime; echo date("Y-m-d H:i:s",$teachertime)?></span>
                                        </div>
                                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                            <div class="page">
                                <?php echo ($page); ?>
                            </div>
                        </div>
                        <!--家长任务模块-->
                        <div id="spect">
                            <p>&nbsp;家长完成任务宝宝拿奖励啦~~~</p>
                            <p><img src="/FS/Public/front/student/images/heartspect.png" /></p>
                        </div>
                        <!--二维码模块-->
                        <div id="write">
                            <p>详情扫描下方二维码填写心愿~~</p>
                            <img src="/FS/Public/front/student/images/code.jpg" />
                        </div>
                    </div>
                </div>
                <!--chatwindow的css样式-->
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
    <script type="text/javascript" src="/FS/Public/front/student/js/jquery-1.2.6.min.js"></script>
    <script type="text/javascript" src="/FS/Public/front/student/js/face.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".send-btn").click(function() {
            var text = $(".Input_text").html();
            console.log(text);
            $(".message-content").val(text);
        });

    });
    </script>
</body>

</html>