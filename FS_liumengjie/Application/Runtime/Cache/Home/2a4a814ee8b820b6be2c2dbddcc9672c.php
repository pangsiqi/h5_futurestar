<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <title>未来之星-我们与你一起成长</title>
    <link rel="stylesheet" type="text/css" href="/FS_l/Public/front/css/common.css">
    <link rel="stylesheet" type="text/css" href="/FS_l/Public/front/css/modal.css">
    <link rel="stylesheet" type="text/css" href="/FS_l/Public/front/css/bgstretcher.css">
    <script type="text/javascript" src="/FS_l/Public/front/js/jquery-1.8.2.js"></script>
    <script type="text/javascript" src="/FS_l/Public/front/js/my.js"></script>
    <script type="text/javascript" src="/FS_l/Public/front/js/html5shiv.min.js"></script>
    <script type="text/javascript" src="/FS_l/Public/front/js/respond.min.js"></script>
    <script type="text/javascript" src="/FS_l/Public/front/js/bgstretcher.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#body').bgStretcher({
            images: ['/FS_l/Public/front/img/banner6.jpg', '/FS_l/Public/front/img/banner9.jpg', '/FS_l/Public/front/img/banner11.jpg', '/FS_l/Public/front/img/banner7.jpg'],
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
                        <span><img src="/FS_l/Public/front/img/header-logo.png"></span>
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
                <div class="loginPop-logo"><img src="/FS_l/Public/front/img/logo.png" width="88px" height="88px"></div>
                <h1>注册学生账号</h1>
                <div class="lop-content contentMar">
                    <div class="lop-right lop-right-res-stu">
                        <form enctype="multipart/form-data" method="post" action="/FS_l/index.php/Home/Index/addStu">
                            <div class="JS-defaultMode pr-main-child js-registerTemplateType" data-type="student">
                                <div class="main-inner">
                                    <!-- <div class="main-title">请选择你所在的班级 : </div>
                                    <input type="hidden" name="grade" value="" class="grade-item"> -->
                                    <div class="main-class clearfloat">
                                        <!-- <span class="click-select-code select-grade" title="小班">小班</span>
                                        <span class="click-select-code select-grade" title="中班">中班</span>
                                        <span class="click-select-code select-grade" title="大班">大班</span> -->
                                        <div style="clear:both; padding:15px 0 10px;">
                                            <p class="select-sex">请选择性别 : </p>
                                            <input type="hidden" name="sex" value="" class="sex-item">
                                            <div class="select-sex">
                                                <span class="click-select-code select-sex-item" data-gender="M">男</span>
                                                <span class="click-select-code select-sex-item" data-gender="F">女</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="c-text">
                                    <span class="login-icon icon-5"></span>
                                    <input type="text" placeholder="请输入真实姓名" class="txt1 JS-inputEvent JS-nameInput" name="realname">
                                    <div class="errorTips"></div>
                                </div>
                                <div class="c-text">
                                    <span class="login-icon icon-1"></span>
                                    <input type="tel" placeholder="请输入老师手机号" class="txt1 JS-inputEvent JS-teatelInput" name="teatel">
                                    <div class="errorTips"></div>
                                </div>
                                <div class="c-text">
                                    <span class="login-icon icon-1"></span>
                                    <input type="tel" placeholder="请输入家长手机号" class="txt1 JS-inputEvent JS-parenttelInput" name="tel">
                                    <div class="errorTips"></div>
                                </div>
                                <div class="c-text">
                                    <span class="login-icon icon-4"></span>
                                    <input type="password" placeholder="请输入密码" class="txt1 JS-inputEvent JS-pwdInput" name="password">
                                </div>
                                <input type="submit" name="sub" value="完成注册" class="login-btn login-btn-res-stu login-orange JS-getClassLIst">
                            </div>
                        </form>
                        <div class="lop-tab tabLeft">
                            <ul>
                                <li class="JS-selectStudent-main stu active" onclick="location.href='/FS_l/index.php/Home/Index/resStu'">
                                    <div class="image"></div>
                                    <div class="side">我是学生</div>
                                </li>
                                <li class="JS-selectTeacher-main" onclick="location.href='/FS_l/index.php/Home/Index/resTeacher'">
                                    <div class="image image-tea"></div>
                                    <div class="side">我是老师</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="/FS_l/Public/front/js/Check.js"></script>
</body>

</html>