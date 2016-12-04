<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <title>未来之星-我们与你一起成长</title>
    <link rel="stylesheet" type="text/css" href="/FS/Public/front/css/common.css">
    <link rel="stylesheet" type="text/css" href="/FS/Public/front/css/modal.css">
    <link rel="stylesheet" type="text/css" href="/FS/Public/front/css/bgstretcher.css">
    <script type="text/javascript" src="/FS/Public/front/js/jquery-1.8.2.js"></script>
    <script type="text/javascript" src="/FS/Public/front/js/my.js"></script>
    <script type="text/javascript" src="/FS/Public/front/js/html5shiv.min.js"></script>
    <script type="text/javascript" src="/FS/Public/front/js/respond.min.js"></script>
    <script type="text/javascript" src="/FS/Public/front/js/bgstretcher.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#body').bgStretcher({
            images: ['/FS/Public/front/img/banner6.jpg', '/FS/Public/front/img/banner9.jpg', '/FS/Public/front/img/banner11.jpg', '/FS/Public/front/img/banner7.jpg'],
            imageWidth: 1024,
            imageHeight: 500,
            transitionEffect: 'fade',
            nextSlideDelay:'8000'
        });
    });
    </script>
</head>

<body>
    <div class="global-nav-inner">
        <div class="global-nav-container clearfloat">
            <ul class="nav js-global-actions" role="navigation" id="global-actions">
                <li id="global-nav-home" class="home">
                    <a class="js-nav js-tooltip js-dynamic-tooltip" href="index.html">
                        <span><img src="/FS/Public/front/img/header-logo.png"></span>
                    </a>
                </li>
                <li id="global-nav-about" class="about">
                    <a class="js-tooltip js-dynamic-tooltip" href="/about" target="_blank">
                        <span class="text">关于我们</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div id="body"></div>
    
    <div class="webInfo">
        <h1 class="webInfo-title">欢迎使用未来之星<p class="webInfo-title-en">Welcome To FutureStar</p></h1>
        <p class="webInfo-info">为学前儿童打造的在线学习平台</p>
        <p class="webInfo-info">串联教师、学生、家长三方的教与学关系</p>
    </div>
    <div class="login-register">
        <p class="banner1-title">未来之星-教育助你成长</p>
        <p class="login"><a href="/FS/index.php/Home/Index/login">登录</a></p>
        <p class="register"><a href="/FS/index.php/Home/Index/resStu">注册</a></p>
    </div>
    <div class="body-footer">
        <ul class="clearfloat">
            <li class="footerli"><a href="#">后台管理</a></li>
            <li class="footerli"><a href="#">关于我们</a></li>
            <li class="footerli"><a href="#">各界声音</a></li>
            <li class="footerli"><a href="#">加入我们</a></li>
        </ul>
        <p>Copyright &copy; 2016 futurestar Corporation. All Rights Reserved.</p>
    </div>
</body>

</html>