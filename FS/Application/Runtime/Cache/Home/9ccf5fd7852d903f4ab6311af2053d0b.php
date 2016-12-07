<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <title>资源管理</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="/FS/Public/front/teacher/css/bootstrap.min.css">
    <link rel="stylesheet" href="/FS/Public/front/teacher/css/resource.css">
    <script src="/FS/Public/front/teacher/js/jquery.js"></script>
    <script src="/FS/Public/front/teacher/js/bootstrap.min.js"></script>
</head>

<body style="background-color:RGB(189,235,141); overflow-x:hidden">
    <div class="row clearfix" id="header">
        <div class="col-md-4 column" style="margin-top:10px;padding-left:120px">
            <img alt="35x35" src="/FS/Public/front/teacher/images/logo.png" />
        </div>
        <div class="col-md-4 column">
        </div>
        <div class="col-md-4 column">
            <ul id="nav" style="padding-left:40px;margin-top:8px">
                <li>
                    <a href="guestbook.html"><img src="/FS/Public/front/teacher/images/email.png" /></a>
                </li>
                <li style="padding-left:5px"><a href="guestbook.html">消息</a></li>
                <li style="padding-left:3px;padding-top:2px"><img src="/FS/Public/front/teacher/images/circle.png" class="img-circle" /></li>
                <li style="padding:0 0 0 3px;margin:0 ">
                    <li class="dropdown">
                        <a href="#" id="navbarDrop1" class="dropdown-toggle" data-toggle="dropdown" style="width:100px;border:solid 1px RGB(187,187,187); border-radius:4px;color:black;float:left;"><span style="padding:0 30px;padding-right:50px">1</span><span class="caret" style=""></span></a>
                        <ul class="dropdown-menu" style="min-width:0px;">
                            <li><a href="personCenter.html">个人资料</a></li>
                            <li><a href="update.html">修改资料</a></li>
                            <li><a href="#">退出</a></li>
                        </ul>
                    </li>
                </li>
            </ul>
        </div>
    </div>
    <div class="row clearfix" id="content" style="height:600px">
        <div class="col-md-3 column" style="padding-left: 145px;padding-top:35px">
            <div class="row clearfix" style="background-color: white; width:146px; height:110px;">
                <div class="col-md-6 column" style="margin-top:2px; padding-top:15px">
                    <img src="/FS/Public/front/teacher/images/1-2.png" class="img-rounded" />
                </div>
                <div class="col-md-6 column" style="font-size:12px; margin-top:2px">
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <p style="padding:15px 0 0 0;margin:0;float:left"><a href="personCenter.html">孙老师</a></p>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <a href="rank.html">
                                <div class="progress" style="height:8px; width:16px; float:right;padding:0;margin:0;margin-top:5px">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                        <span class="sr-only">50%</span>
                                    </div>
                                </div>
                                <p style="padding:0;margin:0">LVO</p>
                            </a>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <a href="#">
                                <p style="padding:0;margin:0;float:left">鲜花:0</p>
                            </a>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-12 column">
                            <input type="button" style="background-color:white; border:solid 1px gray; border-radius:8px" value="证">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 column" style="padding:0">
                    <div class="panel-group" id="panel-493390">
                        <ul class="list-group">
                            <li>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="panel-title" data-toggle="collapse" data-parent="#panel-493390" href="#panel-element-682792"><a href="index.html">首页</a></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-493390" href="#panel-element-749900">英语作业<span class="glyphicon glyphicon-chevron-down" style="color:white;padding-top:4px;padding-left:16px"></span></a>
                                    </div>
                                    <div id="panel-element-749900" class="panel-collapse collapse">
                                        <div class="panel-body" style="padding:0">
                                            <ul class="homeworkList_e" style="padding:0">
                                                <li class="list-group-item" style="margin-left:0"><a href="assignment.html">布置作业</a></li>
                                                <li class="list-group-item" style="margin-left:0"><a href="workpaper.html">作业情况</a></li>
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
                                </div>
                            </li>
                            <li>
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
        <div class="col-md-7 column" style="padding-left:20px;padding-top:12px">
            <div class="col-md-12 column" id="content_h">
                <div class="row clearfix">
                    <div class="col-md-12 column" style="background-color:RGB(156,204,101);height:45px;">
                        <a href="upload.html">
                            <input style="margin-top:14px;border:solid 1px gray;background-color:RGB(43,175,43); color:white;float:right;border-radius:4px;width:70px;height:22px;text-align:center" value="上传" />
                        </a>
                        <a href="#"><h3 style="font-size:20px; padding-top:16px;padding-left:28px;margin:0">学习资源</h3></a>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <ul class="number">
                            <li><a href="#">1.学习资源之数字</a></li>
                            <li style="padding-left:200px;"><a href="#">孙老师</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12 column">
                        <ul class="number">
                            <li><a href="#">2.学习资源之数字</a></li>
                            <li style="padding-left:200px;"><a href="#">孙老师</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12 column">
                        <ul class="number">
                            <li><a href="#">3.学习资源之数字</a></li>
                            <li style="padding-left:200px;"><a href="#">孙老师</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12 column">
                        <ul class="number">
                            <li><a href="#">4.学习资源之数字</a></li>
                            <li style="padding-left:200px;"><a href="#">孙老师</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12 column">
                        <ul class="number">
                            <li><a href="#">5.学习资源之数字</a></li>
                            <li style="padding-left:200px;"><a href="#">孙老师</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12 column">
                        <ul class="number">
                            <li><a href="#">6.学习资源之数字</a></li>
                            <li style="padding-left:200px;"><a href="#">孙老师</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12 column">
                        <ul class="number">
                            <li><a href="#">7.学习资源之数字</a></li>
                            <li style="padding-left:200px;"><a href="#">孙老师</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12 column">
                        <ul class="number">
                            <li><a href="#">8.学习资源之数字</a></li>
                            <li style="padding-left:200px;"><a href="#">孙老师</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12 column">
                        <ul class="number">
                            <li><a href="#">9.学习资源之数字</a></li>
                            <li style="padding-left:200px;"><a href="#">孙老师</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12 column">
                        <ul class="number">
                            <li><a href="#">10.学习资源之数字</a></li>
                            <li style="padding-left:200px;"><a href="#">孙老师</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12 column" style="margin-bottom:30px">
                        <ul class="number">
                            <li><a href="#">11.学习资源之数字</a></li>
                            <li style="padding-left:200px;"><a href="#">孙老师</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 column"></div>
    </div>
    <div class="row clearfix" id="footer">
        <div class="col-md-12 column" style="padding-top:15px">
            <p>Copyright @ 2011-2016 futurestar Corporation. All Rights Reserved.</p>
        </div>
        <div class="col-md-12 column">
            <div class="col-md-3 column">
            </div>
            <div class="col-md-5 column">
                <ul class="footer_nav">
                    <li style="padding-left:45px">后台管理</li>
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