<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>上传</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="/FS/Public/front/teacher/css/bootstrap.min.css">
    <link rel="stylesheet" href="/FS/Public/front/teacher/css/upload.css">
    <link rel="stylesheet" href="/FS/Public/front/teacher/css/bootstrap-datetimepicker.min.css">
    <script src="/FS/Public/front/teacher/js/jquery.js"></script>
    <script src="/FS/Public/front/teacher/js/bootstrap.min.js"></script>
    <script src="/FS/Public/front/teacher/js/bootstrap-datetimepicker.fr.js"></script>
    <script src="/FS/Public/front/teacher/js/bootstrap-datetimepicker.js"></script>
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
    <div class="col-md-2 column">
    </div>
    <div class="col-md-10 column">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <h4>名称:&nbsp;&nbsp;&nbsp;<a href="#"><input id="name" type="text"/></a>
            </h4>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <h4>作者:&nbsp;&nbsp;&nbsp;<a href="#"><input id="author" type="text"/></a>
            </h4>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <h4>时间：
                <input size="16" type="text" value=" " readonly class="form_datetime" >

                <script type="text/javascript">
                    $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
                </script></h4>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-2"><h4>描述：</h4></div>
        <div class="col-md-10 column">
                <textarea rows="4" cols="60" id="des"></textarea>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12 column" id="file_c">
            <label for="exampleInputFile"></label>
            <input type="file" id="exampleInputFile">
        </div>
    </div><br/>
    <div class="row clearfix" id="up">
        <div class="col-md-12 column">
            <input type="text" id="up_f" value="点击上传" />
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
</body>
</html>