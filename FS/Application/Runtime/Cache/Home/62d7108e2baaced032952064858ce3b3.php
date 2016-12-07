<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>布置作业</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="/FS/Public/front/teacher/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/FS/Public/front/teacher/css/assginment.css">
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
            <li><a href="guestbook.html"><img src="/FS/Public/front/teacher/images/email.png" /></a></li>
            <li id="new"><a href="guestbook.html">消息</a></li>
            <li id="circle"><img src="/FS/Public/front/teacher/images/circle.png" class="img-circle" /></li>
            <li id="drop">
            <li class="dropdown" >
                <a href="#" id="navbarDrop1" class="dropdown-toggle" data-toggle="dropdown"><span id="navbarDrop2">1</span><span class="caret"></span></a>
                <ul class="dropdown-menu" id="navbarDrop3">
                    <li><a href="personCenter.html" >个人资料</a></li>
                    <li><a href="update.html" >修改资料</a></li>
                    <li><a href="#" >退出</a></li>
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
                <img src="/FS/Public/front/teacher/images/1-2.png" class="img-rounded" />
            </div>
            <div class="col-md-6 column" id="left2">
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <p id="tec"><a href="personCenter.html">孙老师</a></p>
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
                        <a href="#"><p id="flower">鲜花:0</p></a>
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
                                    <a class="panel-title" data-toggle="collapse" data-parent="#panel-493390" href="#panel-element-682792"><a href="index.html">首页</a></a>
                                </div>
                            </div>
                        </li>
                        <li >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-493390" href="#panel-element-749900">英语作业<span class="glyphicon glyphicon-chevron-down" id="test"></span></a>
                                </div>
                                <div id="panel-element-749900" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="homeworkList_e">
                                            <li class="list-group-item"><a href="assignment.html">布置作业</a></li>
                                            <li class="list-group-item"><a href="workpaper.html">作业情况</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="panel-title" data-toggle="collapse" data-parent="#panel-493390" href="#panel-element-682792"><a href="myClass.html">我的班级</a></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="panel-title" data-toggle="collapse" data-parent="#panel-493390" href="#panel-element-682792"><a href="resource.html">资源箱</a></a>
                                </div>
                            </div></li><li>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="panel-title" data-toggle="collapse" data-parent="#panel-493390" href="#panel-element-682792"><a href="guestbook.html">留言板</a></a>
                            </div>
                        </div>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
   <!--内容右侧-->
    <div class="col-md-7 column" id="content_h">
        <div class="row clearfix" >
            <div class="col-md-12 column" id="right1">
                <h3 id="title">布置作业</h3>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 column" id="right2">
                <h3 id="myclass">班级：中班1班</h3>
                <div class="tabbable" id="tabs-572974">
                    <ul class="nav nav-tabs" id="star">
                        <li class="active">
                            <a href="#panel-706814" data-toggle="tab">
                                <span class="glyphicon glyphicon-star" id="basic"></span><p>基础练习</p>
                            </a>
                        </li>
                        <li>
                            <a href="#panel-804335" data-toggle="tab">
                                <span class="glyphicon glyphicon-star" id="expend"></span><p>扩展练习</p>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="panel-706814">
                            <div class="row clearfix">
                                <h3 class="course">第一课</h3>
                                <div class="col-md-6 column">
                                    <div class="basicstudy">
                                    <ul class="study">
                                        <li class="subject"><a href="#">基础的数字学习</a></li>
                                        <li class="plus"><a href="#"><span class="glyphicon glyphicon-plus"></span></a></li>
                                    </ul>
                                    </div>
                                </div>
                                 <div class="col-md-6 column">
                                    <div class="basicstudy">
                                    <ul class="study">
                                        <li class="subject"><a href="#">基础的数字学习</a></li>
                                        <li class="plus"><a href="#"><span class="glyphicon glyphicon-plus"></span></a></li>
                                    </ul>
                                    </div>
                                </div>
                                 <div class="col-md-6 column">
                                    <div class="basicstudy">
                                    <ul class="study">
                                        <li class="subject"><a href="#">基础的数字学习</a></li>
                                        <li class="plus"><a href="#"><span class="glyphicon glyphicon-plus"></span></a></li>
                                    </ul>
                                    </div>
                                </div>
                                 <div class="col-md-6 column">
                                    <div class="basicstudy">
                                    <ul class="study">
                                        <li class="subject"><a href="#">基础的数字学习</a></li>
                                        <li class="plus"><a href="#"><span class="glyphicon glyphicon-plus"></span></a></li>
                                    </ul>
                                    </div>
                                </div>
                                 <div class="col-md-6 column">
                                    <div class="basicstudy">
                                    <ul class="study">
                                        <li class="subject"><a href="#">基础的数字学习</a></li>
                                        <li class="plus"><a href="#"><span class="glyphicon glyphicon-plus"></span></a></li>
                                    </ul>
                                    </div>
                                </div>
                                 <div class="col-md-6 column">
                                    <div class="basicstudy">
                                    <ul class="study">
                                        <li class="subject"><a href="#">基础的数字学习</a></li>
                                        <li class="plus"><a href="#"><span class="glyphicon glyphicon-plus"></span></a></li>
                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="panel-804335">
                            <div class="row clearfix">
                                <h3 class="course">第一课</h3>
                                <div class="col-md-6 column">
                                    <div class="expendstudy">
                                    <ul class="study">
                                        <li class="subject"><a href="#">基础的扩展学习</a></li>
                                        <li class="plus"><a href="#"><span class="glyphicon glyphicon-plus"></span></a></li>
                                    </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 column">
                                    <div class="expendstudy">
                                    <ul class="study">
                                        <li class="subject"><a href="#">基础的扩展学习</a></li>
                                        <li class="plus"><a href="#"><span class="glyphicon glyphicon-plus"></span></a></li>
                                    </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 column">
                                    <div class="expendstudy">
                                    <ul class="study">
                                        <li class="subject"><a href="#">基础的扩展学习</a></li>
                                        <li class="plus"><a href="#"><span class="glyphicon glyphicon-plus"></span></a></li>
                                    </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 column">
                                    <div class="expendstudy">
                                    <ul class="study">
                                        <li class="subject"><a href="#">基础的扩展学习</a></li>
                                        <li class="plus"><a href="#"><span class="glyphicon glyphicon-plus"></span></a></li>
                                    </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 column">
                                    <div class="expendstudy">
                                    <ul class="study">
                                        <li class="subject"><a href="#">基础的扩展学习</a></li>
                                        <li class="plus"><a href="#"><span class="glyphicon glyphicon-plus"></span></a></li>
                                    </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 column">
                                    <div class="expendstudy">
                                    <ul class="study">
                                        <li class="subject"><a href="#">基础的扩展学习</a></li>
                                        <li class="plus"><a href="#"><span class="glyphicon glyphicon-plus"></span></a></li>
                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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