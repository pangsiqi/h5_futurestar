<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <title>留言板</title>
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no,minimal-ui">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/FS/Public/front/teacher/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 800px) and (max-device-width: 1100px)" href="/FS/Public/front/teacher/css/guestbook1024.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1240px) and (max-device-width: 2000px)" href="/FS/Public/front/teacher/css/guestbook.css" />
    <script src="/FS/Public/front/teacher/js/jquery.js"></script>
    <script src="/FS/Public/front/teacher/js/bootstrap.min.js"></script>
</head>

<body>
    <!--导航-->
    <div class="row clearfix" id="header">
        <div class="col-md-4 column" id="logo">
            <a href="/FS/index.php/Home/Teacher/index"><img alt="35x35" src="/FS/Public/front/teacher/images/logo.png" /></a>
        </div>
        <div class="col-md-4 column">
        </div>
        <div class="col-md-4 column">
            <ul id="nav">
                <li>
                    <a href="/FS/index.php/Home/Teacher/guestbook.html"><img src="/FS/Public/front/teacher/images/email.png" /></a>
                </li>
                <li id="new"><a href="/FS/index.php/Home/Teacher/guestbook.html">消息</a></li>
                <li id="circle">
                    <img src="<?php echo ($tea["thumb"]); ?>" class="img-circle" width="40px" height="40px" />
                </li>
                <li id="drop">
                    <li class="dropdown">
                        <a href="#" id="navbarDrop1" class="dropdown-toggle" data-toggle="dropdown"><span id="navbarDrop2"><?php echo ($tea["realname"]); ?></span><span class="caret"></span></a>
                        <ul class="dropdown-menu" id="navbarDrop3">
                            <li><a href="/FS/index.php/Home/Teacher/personCenter.html">个人资料</a></li>
                            <li><a href="/FS/index.php/Home/Teacher/update.html">修改资料</a></li>
                            <li><a href="/FS/index.php/Home/Teacher/logout">退出</a></li>
                        </ul>
                    </li>
                </li>
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix" id="content">
            <div class="col-md-12 column content-main">
                <div class="row clearfix">
                    <div class="col-md-3 column" id="avatar">
                        <img alt="90x90" src="<?php echo ($tea["thumb"]); ?>" class="img-circle" width="90px" height="90px" />
                    </div>
                    <div class="col-md-9 column">
                        <h3 id="tea_n"><?php echo ($tea["realname"]); ?></h3>
                        <ul class="tea_n">
                            <li id="tea_m">教工号：<?php echo ($tea["id"]); ?></li>
                            <li id="tea_c">班级：<?php echo ($tea["grade"]); ?></li>
                        </ul>
                    </div>
                </div>
                <form method="post" action="/FS/index.php/Home/Teacher/addMessage">
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <h4 id="say">有什么心里话要告诉他们呢？</h4>
                            <div class="row clearfix">
                                <div class="col-md-12 column clearborder">
                                    <!-- <textarea id="message1" cols="110" rows="8"></textarea> -->
                                    <div class="Input_text" id="message1" contenteditable='true'></div>
                                    <input type="hidden" name="message" class="message-content">
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-8 column">
                                    <ul class="image imgBtn">
                                        <li>
                                            <img src="/FS/Public/front/teacher/images/face.png" />表情
                                        </li>
                                    </ul>
                                    <div class="faceDiv"></div>
                                    <ul id="pass">
                                        <!-- <li><a href="#">发送给：</a></li>
                                            <li class="pass">
                                                <li class="dropdown">
                                                    <a href="#" id="navbarDrop4" class="dropdown-toggle" data-toggle="dropdown"><span class="pass_p">家长</span><span class="caret"></span></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#one">***</a></li>
                                                        <li><a href="#two">***</a></li>
                                                        <li><a href="#three">***</a></li>
                                                    </ul>
                                                </li>
                                            </li>
                                            <li class="pass">
                                                <li class="dropdown">
                                                    <a href="#" id="navbarDrop5" class="dropdown-toggle" data-toggle="dropdown"><span class="pass_p">学生</span><span class="caret"></span></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#one">***</a></li>
                                                        <li><a href="#two">***</a></li>
                                                        <li><a href="#three">***</a></li>
                                                    </ul>
                                                </li>
                                            </li> -->
                                        <li>
                                            <input type="submit" id="pass_p" class="send-btn" value="发送" />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix" id="dia">
                        <ul class="dia">
                            <li>
                                <h4 id="dia_t">和家长的聊天记录全在这里啦</h4>
                            </li>
                            <select name="realname" id="selectStu">
                                <option value="请选择学生">学生</option>
                                <?php if(is_array($student)): $i = 0; $__LIST__ = $student;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$stu): $mod = ($i % 2 );++$i;?><option value="<?php echo ($stu["realname"]); ?>"><?php echo ($stu["realname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </ul>
                        <div class="col-md-12 column" id="dia_s">
                            <div id="jp-container" class="jp-container">
                                <!-- <?php if(is_array($message)): $i = 0; $__LIST__ = $message;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mr): $mod = ($i % 2 );++$i;?><div class="talk_recordboxme">
                                        <div class="user"><img src="/FS/Public/front/student/images/15.jpg" /></div>
                                        <div class="talk_recordtextbg">&nbsp;</div>
                                        <div class="talk_recordtext">
                                            <h3><?php echo ($mr["teachercontent"]); ?></h3>
                                            <span class="talk_time"><?php $parenttime=$mr.parenttime; echo date("Y-m-d H:i:s",$parenttime)?></span>
                                        </div>
                                    </div>
                                    <div class="talk_recordbox">
                                        <div class="user"><img src="/FS/Public/front/student/images/14.jpg" /></div>
                                        <div class="talk_recordtextbg">&nbsp;</div>
                                        <div class="talk_recordtext">
                                            <h3><?php echo ($mr["parentcontent"]); ?></h3>
                                            <span class="talk_time"><?php $teachertime=$mr.teachertime; echo date("Y-m-d H:i:s",$teachertime)?></span>
                                        </div>
                                    </div><?php endforeach; endif; else: echo "" ;endif; ?> -->
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row clearfix">
                <div class="col-md-9 column">
                    <?php echo ($page); ?>
                </div>
            </div>
        </div>
    </div>
    <!--尾部-->
    <div class="row clearfix" id="footer">
        <div class="col-md-12 column" id="footer1">
            <p>Copyright @ 2011-2016 futurestar Corporation. All Rights Reserved.</p>
        </div>
        <div class="col-md-12 column">
            <div class="col-md-3 column">
            </div>
            <div class="col-md-5 column">
                <ul class="footer_nav">
                    <li id="footer2">后台管理</li>
                    <li>关于我们</li>
                    <li>各界声音</li>
                    <li>加入我们</li>
                </ul>
            </div>
            <div class="col-md-4 column">
            </div>
        </div>
    </div>
    <script type="text/javascript" src="/FS/Public/front/teacher/js/jquery-1.2.6.min.js"></script>
    <script type="text/javascript" src="/FS/Public/front/teacher/js/face.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".send-btn").click(function() {
            var text = $(".Input_text").html();
            $(".message-content").val(text);
        });
        $("#selectStu").change(function() {
            var stuName = $("#selectStu").find("option:selected").val();
            var data = {
                stuName: stuName
            }
            $.ajax({
                url: 'http://localhost:8080/FS/index.php/Home/Teacher/showMessage',
                type: 'post',
                data: data,
                success: function(data) {
                    console.log(JSON.parse(data));
                    var message = JSON.parse(data);
                    for (var i in message) {
                        var o_container = $("#jp-container");
                        var o_talkme = $("<div class='talk_recordboxme'></div>");
                        var o_talkstu = $("<div class='talk_recordbox'></div>");

                        var o_user = $("<div class='user'></div>");
                        var o_userThumb = $("<img src='/FS/Public/uploads/2016-12-08/5848b5bf7a5d9.jpg' />");
                        var o_talkbg = $("<div class='talk_recordtextbg'></div>");
                        var o_talktext = $("<div class='talk_recordtext'></div>");
                        var o_content_h3 = $("<h3></h3>");
                        var o_content_span = $("<span class='talk_time'></span>");

                        var o_user_stu = $("<div class='user'></div>");
                        var o_userThumb_stu = $("<img src='/FS/Public/uploads/2016-12-08/5848b5bf7a5d9.jpg' />");
                        var o_talkbg_stu = $("<div class='talk_recordtextbg'>&nbsp;</div>");
                        var o_talktext_stu = $("<div class='talk_recordtext'></div>");
                        var o_content_h3_stu = $("<h3></h3>");
                        var o_content_span_stu = $("<span class='talk_time'></span>");
                        
                        o_container.append(o_talkme);
                        o_container.append(o_talkstu);
                        // 教师
                        o_talkme.append(o_user);
                        o_talkme.append(o_talkbg);
                        o_talkbg.html("&nbsp;");
                        o_talkme.append(o_talktext);
                        o_talktext.append(o_content_h3);
                        o_content_h3.html(message[i]['teachercontent'])
                        o_talktext.append(o_content_span);
                        o_user.append(o_userThumb);
                        // 学生
                        o_talkstu.append(o_user_stu);
                        o_talkstu.append(o_talkbg_stu);
                        o_talkbg_stu.html("&nbsp;");
                        
                        o_talkstu.append(o_talktext_stu);
                        o_talktext_stu.append(o_content_h3_stu);
                        o_content_h3_stu.html(message[i]['parentcontent'])
                        o_talktext_stu.append(o_content_span_stu);
                        o_user_stu.append(o_userThumb_stu);


                        console.log(message[i]);
                    }


                },
                error: function() {
                    alert("请选择学生");
                    // console.log(data);
                }
            });
        });
    });
    </script>
</body>

</html>