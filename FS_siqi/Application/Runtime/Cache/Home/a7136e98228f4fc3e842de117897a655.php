<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>语文印象</title>
    <link rel="stylesheet" href="/FS_siqi/Public/front/student/css/bootstrap.min.css">
    <!-- <link href="/FS_siqi/Public/front/student/css/nav.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="/FS_siqi/Public/front/student/css/chinese.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="/FS_siqi/Public/front/student/css/personinfo.css" rel="stylesheet" type="text/css" /> -->

    <!--新添加-->
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 800px) and (max-device-width: 1100px)" href="/FS_siqi/Public/front/student/css/chinese1024.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1240px) and (max-device-width: 2000px)" href="/FS_siqi/Public/front/student/css/chinese.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 800px) and (max-device-width: 1100px)" href="/FS_siqi/Public/front/student/css/nav1024.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1240px) and (max-device-width: 2000px)" href="/FS_siqi/Public/front/student/css/nav.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 800px) and (max-device-width: 1100px)" href="/FS_siqi/Public/front/student/css/changeinfo1024.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1240px) and (max-device-width: 2000px)" href="/FS_siqi/Public/front/student/css/changeinfo.css" />

    <link rel="stylesheet" href="/FS_siqi/Public/front/student/css/bootstrap-datetimepicker.min.css">
    <script src="/FS_siqi/Public/front/student/js/jquery.js"></script>
    <script src="/FS_siqi/Public/front/student/js/bootstrap.min.js"></script>
    <script src="/FS_siqi/Public/front/student/js/bootstrap-datetimepicker.fr.js"></script>
    <script src="/FS_siqi/Public/front/student/js/bootstrap-datetimepicker.js"></script>
</head>

<body>
    <!--导航栏部分-->
    <div class="col-md-12 col-lg-8" id="nav">
        <ul>
            <li><a href="/FS_siqi/index.php/Home/Student/index.html">首页</a></li>
            <li><a href="/FS_siqi/index.php/Home/Student/chinese.html">学习中心</a></li>
            <li><a href="/FS_siqi/index.php/Home/Student/pk.html">竞技场</a></li>
            <li><a href="/FS_siqi/index.php/Home/Student/classspace.html">班级天地</a></li>
            <li><a href="/FS_siqi/index.php/Home/Student/parentspace.html">家长空间</a></li>
            <li><a href="/FS_siqi/index.php/Home/Student/gift.html">奖品</a></li>
            <li>
                <a href="#"><img src="/FS_siqi/Public/front/student/images/email.png" /></a>
            </li>
            <li>
                <a href="/FS_siqi/index.php/Home/Student/studycontent"><img src="/FS_siqi/Public/front/student/images/headpic.jpg" class="img-circle" /></a>
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
                <!--左侧内容-->
                <div id="nav2">
                    <div id="chinese"><a href="/FS_siqi/index.php/Home/Student/personcenter.html">个人资料</a></div>
                    <div id="math"><a href="/FS_siqi/index.php/Home/Student/changeinform.html">修改信息</a></div>
                    <div id="english">
                        <a href="/FS_siqi/index.php/Home/Student/english.html"></a>
                    </div>
                    <div id="walk">
                        <a href="/FS_siqi/index.php/Home/Student/walktolisten.html"></a>
                    </div>
                    <div id="garden">
                        <a href="/FS_siqi/index.php/Home/Student/classgarden.html"></a>
                    </div>
                </div>
                <!--右侧内容-->
                <div class="row clearfix">
                    <div id="rightcontent">
                        <div id="title">
                            <ul>
                                <a href="#">修改信息</a>
                            </ul>
                        </div>
                        <div id="studycontent">
                            <form method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo ($student["id"]); ?>">
                                <div class="col-md-12 column" id="content_h">
                                    <ol>
                                        <li style="padding-left:20px">
                                            <img class="userthumb" title="<?php echo ($student["realname"]); ?>" alt="头像" src="<?php echo ($student["thumb"]); ?>" onclick="upfile.click()" />
                                            <input type="file" name="thumb" id="upfile" onchange="uploadFile()" style="visibility: hidden; position: absolute;">
                                        </li>
                                        <li style="padding-left:30px"><?php echo ($student["realname"]); ?></li>
                                        <li>学号：<?php echo ($student["id"]); ?></li>
                                        <li>金币：<?php echo ($student["starnum"]); ?></li>
                                        <li>姓名：
                                            <input name="realname" value="<?php echo ($student["realname"]); ?>" style="border-radius:5px;border:solid 1px RGB(187,187,187)" type="text" />
                                        </li>
                                        <li>性别：<?php echo ($student["sex"]); ?>
                                        </li>
                                        <li>出生日期：
                                            <input name="birthday" size="16" type="text" value="<?php echo ($student["birthday"]); ?>" class="form_datetime" style="text-align:center;border-radius:5px;border:solid 1px RGB(187,187,187)">
                                            <script type="text/javascript">
                                            $(".form_datetime").datetimepicker({
                                                format: 'yyyy-mm-dd hh:ii'
                                            });
                                            </script>
                                        </li>
                                        <li>学校：<?php echo ($student["school"]); ?></li>
                                        <li>年级：<?php echo ($student["grade"]); ?></li>
                                        <li style="padding-left:30px">
                                            <input type="submit" class="btn btn-info btn-lg" value="保存资料">
                                            <!-- <a href="/FS_siqi/index.php/Home/Student/addInfo">
                                                <button type="button" class="btn btn-info btn-lg">保存资料</button>
                                            </a> -->
                                        </li>
                                    </ol>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--页脚-->
    <div class="footer">
        <ul>
            <li>Copyright © 2011-2016 futurestar Corporation. All Rights Reserved.</li>
            <div>
                <li id="footerli">
                    <a href="/FS_siqi/index.php/admin">后台管理</a>
                    <a href="#">关于我们</a>
                    <a href="#">各界声音</a>
                    <a href="#">加入我们</a>
                </li>
            </div>
        </ul>
    </div>
</body>

</html>