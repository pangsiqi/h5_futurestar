<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <title>个人中心</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="/FS/Public/front/teacher/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 800px) and (max-device-width: 1100px)" href="/FS/Public/front/teacher/css/personCenter1024.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1240px) and (max-device-width: 2000px)" href="/FS/Public/front/teacher/css/personCenter.css" />
    <script src="/FS/Public/front/teacher/js/jquery.js"></script>
    <script src="/FS/Public/front/teacher/js/bootstrap.min.js"></script>
</head>

<body>
    <!--导航-->
    <div class="row clearfix" id="header">
        <div class="col-md-4 column" id="logo">
            <img alt="35x35" src="/FS/Public/front/teacher/images/logo.png" />
        </div>
        <div class="col-md-4 column">
        </div>
        <div class="col-md-4 column">
            <ul id="nav">
                <li>
                    <a href="/FS/index.php/Home/Teacher/guestbook.html"><img src="/FS/Public/front/teacher/images/email.png" /></a>
                </li>
                <li id="new"><a href="/FS/index.php/Home/Teacher/guestbook.html">消息</a></li>
                <li id="circle"><img src="<?php echo ($tea["thumb"]); ?>" width="40px" height="40px" class="img-circle" /></li>
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
    <div class="row clearfix" id="content">
        <!--内容导航-->
        <div class="col-md-3 column" id="content_left1">
            <div class="row clearfix" id="left1">
                <div class="col-md-6 column" id="pic">
                    <img src="<?php echo ($tea["thumb"]); ?>" width="70px" height="70px" class="img-rounded" />
                </div>
                <div class="col-md-6 column" id="left2">
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <p id="tec"><a href="/FS/index.php/Home/Teacher/personCenter.html"><?php echo ($tea["realname"]); ?></a></p>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                    <span class="sr-only">50%</span>
                                </div>
                            </div>
                            <p id="lvo">LVO</p>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <a href="#">
                                <p id="flower">鲜花:0</p>
                            </a>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <input type="button" id="zheng" value="证">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 column" id="list">
                    <div class="panel-group" id="panel-493390">
                        <ul class="list-group">
                            <li>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="panel-title" data-toggle="collapse" data-parent="#panel-493390" href="#panel-element-682792"><a href="/FS/index.php/Home/Teacher/index.html">首页</a></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-493390" href="#panel-element-749900">英语作业<span class="glyphicon glyphicon-chevron-down" id="test"></span></a>
                                    </div>
                                    <div id="panel-element-749900" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul class="homeworkList_e">
                                                <li class="list-group-item"><a href="/FS/index.php/Home/Teacher/assignment.html">布置作业</a></li>
                                                <li class="list-group-item"><a href="/FS/index.php/Home/Teacher/workpaper.html">作业情况</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="panel-title" data-toggle="collapse" data-parent="#panel-493390" href="#panel-element-682792"><a href="/FS/index.php/Home/Teacher/myClass.html">我的班级</a></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="panel-title" data-toggle="collapse" data-parent="#panel-493390" href="#panel-element-682792"><a href="/FS/index.php/Home/Teacher/resource.html">资源箱</a></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="panel-title" data-toggle="collapse" data-parent="#panel-493390" href="#panel-element-682792"><a href="/FS/index.php/Home/Teacher/guestbook.html">留言板</a></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7 column" id="content_right">
            <div class="col-md-12 column" id="content_h">
                <ol>
                    <li>
                        <img  class="userthumb" title="<?php echo ($stu["realname"]); ?>" alt="头像" src="<?php echo ($stu["thumb"]); ?>" />
                    </li>
                    <li id="tea_name"><?php echo ($stu["realname"]); ?></li>
                    <li>学号：<?php echo ($stu["id"]); ?></li>
                    <!-- <li>金币：0</li> -->
                    <li>姓名：<?php echo ($stu["realname"]); ?></li>
                    <li>性别：<?php echo ($stu["sex"]); ?></li>
                    <li>出生日期：<?php echo ($stu["birthday"]); ?></li>
                    <li>学校：<?php echo ($stu["school"]); ?></li>
                    <li>年级：<?php echo ($stu["grade"]); ?></li>
                    <li class="mod">
                        <a href="/FS/index.php/Home/Teacher/changestuinfo/id/<?php echo ($stu["id"]); ?>">
                            <button class="" id="mod">修改资料</button>
                        </a>
                    </li>
                </ol>
            </div>
        </div>
        <div class="col-md-2 column"></div>
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
</body>

</html>