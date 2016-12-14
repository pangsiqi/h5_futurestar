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
        <div class="loginPop-box loginBg" style="min-height:100%;">
            <p>
                <a href="index.html" class="index-close"></a>
            </p>
            <div class="register-tea" style="position: relative;top: 60px; width: 1100px; margin: 0 auto">
                <div class="select-hd">按照下面的步骤来选择你的学校</div>
                <div class="select-group clearfloat">
                    <div class="grade-item item">
                        <h2 class="select-title">学段</h2>
                        <select name="grade">
                            <option value="">选择学段</option>
                            <option value="小班">小班</option>
                            <option value="中班">中班</option>
                            <option value="大班">大班</option>
                        </select><span class="select-drop"></span>
                    </div>
                    <div class="subject-item item">
                        <h2 class="select-title">学科</h2>
                        <select name="subject">
                            <option value="选择学科">选择学科</option>
                            <option value="语文">语文</option>
                            <option value="英语">英语</option>
                            <option value="数学">数学</option>
                            <option value="科学">科学</option>
                        </select><span class="select-drop"></span>
                    </div>
                    <div class="city-township-item item">
                        <h2 class="select-title">市区</h2>
                        <select name="city" class="city">
                            <option value="选择市">选择市</option>
                            <option value="石家庄">石家庄</option>
                            <option value="唐山">唐山</option>
                            <option value="秦皇岛">秦皇岛</option>
                        </select><span class="select-city-drop"></span>
                        <select name="township" class="township">
                            <option value="选择区">选择区</option>
                            <option value="裕华区">裕华区</option>
                            <option value="桥西区">桥西区</option>
                            <option value="长安区">长安区</option>
                        </select><span class="select-township-drop"></span>
                    </div>
                    <div class="school-item item">
                        <h2 class="select-title">学校</h2>
                        <select name="school">
                            <option value="选择学校">选择学校</option>
                            <option value="双语幼儿园">双语幼儿园</option>
                            <option value="第一幼儿园">第一幼儿园</option>
                            <option value="第二幼儿园">第二幼儿园</option>
                        </select><span class="select-drop"></span>
                    </div>
                    <div class="class-item item">
                        <h2 class="select-title">班次</h2>
                        <select name="class">
                            <option value="选择班次">选择班次</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select><span class="select-drop"></span>
                    </div>
                </div>
                <form enctype="multipart/form-data" class="form-register-tea" role="form" method="post" action="/FS_l/index.php/Home/Index/addTeacherSelect">
                <input type="hidden" name="id" value="<?php echo ($teacher["id"]); ?>">
                    <div class="select-result">
                        <span class="grade-res item"></span>
                        <input type="hidden" name="grade" class="grade-input">
                        <span class="subject-res item"></span>
                        <input type="hidden" name="subject" class="subject-input">
                        <span class="city-res item"></span>
                        <input type="hidden" name="city" class="city-input">
                        <span class="township-res item"></span>
                        <input type="hidden" name="township" class="township-input">
                        <span class="school-res item"></span>
                        <input type="hidden" name="school" class="school-input">
                        <span class="class-res item"></span>
                        <input type="hidden" name="class" class="class-input">
                    </div>
                    <div class="complete-register">
                        <input type="submit" value="完成注册" class="login-btn login-blue JS-teacherVerMobile">
                    </div>
                </form>
            </div>
            <script type="text/javascript">
            $(document).ready(function() {
                addSection(".grade-item>select", ".grade-res", ".grade-input");
                addSection(".subject-item>select", ".subject-res", ".subject-input");
                addSection(".city", ".city-res", ".city-input");
                addSection(".township", ".township-res", ".township-input");
                addSection(".school-item>select", ".school-res", ".school-input");
                addSection(".class-item>select", ".class-res", ".class-input");

                /**
                 * 教师选择字段页面
                 * @param {[对象]} item   [select的class值]
                 * @param {[对象]} result [存储result的class值]
                 * @param {[对象]} value  [存储输入框中的class值]
                 */
                function addSection(item, result, value) {
                    $(item).on('change', function() {
                        var itemValue = $(this).val();
                        $(result).text(itemValue);
                        $(result).css('display', "inline-block");
                        $(value).val(itemValue);
                        console.log($(value).val());
                    });
                }
            });
            </script>
        </div>
    </div>
</body>

</html>