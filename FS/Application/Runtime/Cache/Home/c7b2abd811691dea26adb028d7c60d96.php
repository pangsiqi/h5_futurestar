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
    
    <div id="modal-overlay">
        <div class="loginPop-box loginBg">
            <p>
                <a href="index.html" class="index-close"></a>
            </p>
            <div class="lop-inner">
                <div class="loginPop-logo"><img src="/FS/Public/front/img/logo.png" width="88px" height="88px"></div>
                <h1>注册老师账号</h1>
                <div class="lop-content">
                    <div class="clearfloat"></div>
                    <div class="JS-defaultMode">
                        <form method="post" action="/FS/index.php/Home/Index/addTeaTel">
                            <input type="hidden" name="id" value="">
                            <div class="c-text">
                                <span class="login-icon icon-5"></span>
                                <input type="text" placeholder="请输入您的真实姓名" class="txt1 JS-teacherRealame JS-inputEvent" name="realname">
                                <div class="errorTips"></div>
                            </div>
                            <div class="c-text">
                                <span class="login-icon icon-1"></span>
                                <input type="text" placeholder="请输入您的手机号" class="txt1 JS-teacherMobile JS-inputEvent" name="tel">
                                <div class="errorTips"></div>
                            </div>
                            <div class="c-text">
                                <span class="login-icon icon-4"></span>
                                <input type="text" placeholder="请输入密码" class="txt1 JS-teacherPassword JS-inputEvent" name="password">
                                <div class="errorTips"></div>
                            </div>
                            <div class="c-text">
                                <span class="login-icon icon-3"></span>
                                <input type="text" placeholder="请输入短信验证码" class="txt2 JS-teacherSmsCode JS-inputEvent" name="telcode">
                                <span class="code codeBg login-blue JS-getCheckCode" >获取验证码</span>
                                <div class="errorTips"></div>
                            </div>
                            <div class="c-text">
                                <span class="login-icon icon-2"></span>
                                <input type="text" placeholder="请输入右侧数字" class="txt2 JS-teacherCaptcha JS-inputEvent" id="captchaInputLogin" name="yzcode">
                                <span id="captchaImageLogin" class="code" >1234</span>
                                <div class="errorTips"></div>
                            </div>
                            <!-- <a href="res-teacher-select.html" class="login-btn login-blue JS-teacherVerMobile">注册老师账号</a> -->
                            <input type="submit" value="注册老师账号" class="login-btn login-blue JS-teacherVerMobile" name="sub">
                        </form>
                    </div>
                    <div class="lop-tab tabLeft">
                        <ul>
                            <li class="JS-selectStudent-main" onclick="location.href='/FS/index.php/Home/Index/resStu'">
                                <div class="image"></div>
                                <div class="side">我是学生</div>
                            </li>
                            <li class="JS-selectTeacher-main tea active" onclick="location.href='/FS/index.php/Home/Index/resTeacher'">
                                <div class="image image-tea"></div>
                                <div class="side">我是老师</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>