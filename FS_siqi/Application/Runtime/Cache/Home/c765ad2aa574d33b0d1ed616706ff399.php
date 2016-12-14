<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>班级天地</title>
    <!-- <link href="/FS_siqi/Public/front/student/css/classspace.css" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" href="/FS_siqi/Public/front/student/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="/FS_siqi/Public/front/student/css/nav.css"> -->
    <!-- <link href="/FS_siqi/Public/front/student/css/nav.css" rel="stylesheet" type="text/css" /> -->
    <!--新添加-->
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 800px) and (max-device-width: 1100px)" href="/FS_siqi/Public/front/student/css/classspace1024.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1240px) and (max-device-width: 2000px)" href="/FS_siqi/Public/front/student/css/classspace.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 800px) and (max-device-width: 1100px)" href="/FS_siqi/Public/front/student/css/nav1024.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1240px) and (max-device-width: 2000px)" href="/FS_siqi/Public/front/student/css/nav.css" />
    <script type="text/javascript" src="/FS_siqi/Public/front/student/js/jquery.js"></script>
    <script type="text/javascript" src="/FS_siqi/Public/front/student/js/bootstrap.min.js"></script>
</head>

<body>
    <!--导航栏部分-->
    <div class="col-md-8" id="nav">
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
            <li><img src="/FS_siqi/Public/front/student/images/headpic.jpg" class="img-circle" />
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
                    <div class="col-md-2 colufmn">
                    </div>
                </div>
                <!--内容部分-->
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-md-4 column" id="left">
                            <h1 style="font-weight: bold">中班</h1>
                            <div id="top">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="/FS_siqi/Public/front/student/images/home.png" width="140px" height="140px" /></div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <ul class="clearfix">
                                        <li>
                                            <p><a href="#">李晓</a></p>
                                        </li>
                                        <li>
                                            <p><img src="/FS_siqi/Public/front/student/images/yellowstar.png" /><span><a href="#">0</a></span></p>
                                        </li>
                                        <!--<br/>
                                    <li><img src="/FS_siqi/Public/front/student/images/graystar.png" /><span><a href="#">0</a></span></li>-->
                                        <li>
                                            <button class="btn btn-success" id="writebtn">签到</button>
                                        </li>
                                    </ul>
                                </div>
                                <HR width="100%" color=#fff SIZE=8 />
                                <HR width="100%" color=#bbbbbb SIZE=8 />
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;收到礼物</p>
                                <HR width="100%" color=#bbbbbb SIZE=8 />
                                <div id="giftpic">
                                    <div class="col-md-4 column">
                                        <img src="/FS_siqi/Public/front/student/images/smallgift.png" />
                                        <a href="#" style="padding-left: 45px">0</a>
                                    </div>
                                    <div class="col-md-4 column">
                                        <img src="/FS_siqi/Public/front/student/images/redflower.png" />
                                        <a href="#" style="padding-left: 45px">0</a>
                                    </div>
                                    <div class="col-md-4 column"></div>
                                </div>
                            </div>
                            <div id="buttom">
                                <p>同班同学</p>
                                <HR width="100%" color=#bbbbbb SIZE=8 />
                                <div style="text-align: center">
                                    <div class="col-md-4 column">
                                        <img src="/FS_siqi/Public/front/student/images/headpicbig.jpg">
                                        <a href="#">0</a>
                                        <img src="/FS_siqi/Public/front/student/images/headpicbig.jpg">
                                        <a href="#">0</a>
                                        <img src="/FS_siqi/Public/front/student/images/headpicbig.jpg">
                                        <a href="#">0</a>
                                    </div>
                                    <div class="col-md-4 column">
                                        <img src="/FS_siqi/Public/front/student/images/headpicbig.jpg">
                                        <a href="#">0</a>
                                        <img src="/FS_siqi/Public/front/student/images/headpicbig.jpg">
                                        <a href="#">0</a>
                                        <img src="/FS_siqi/Public/front/student/images/headpicbig.jpg">
                                        <a href="#">0</a>
                                    </div>
                                    <div class="col-md-4 column">
                                        <img src="/FS_siqi/Public/front/student/images/headpicbig.jpg">
                                        <a href="#">0</a>
                                        <img src="/FS_siqi/Public/front/student/images/headpicbig.jpg">
                                        <a href="#">0</a>
                                        <img src="/FS_siqi/Public/front/student/images/headpicbig.jpg">
                                        <a href="#">0</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 column">
                        </div>
                        <div class="col-md-7 column" id="right">
                            <div class="tabable">
                                <ul class="nav nav-tabs" id="nav-tab">
                                    <li id="a1" class="nav-active"><a href="#tab1" data-toggle="tab">班级空间</a></li>
                                    <li id="a2"> <a href="#tab2" data-toggle="tab">我的空间</a></li>
                                    <li id="a3"><a href="#tab3" data-toggle="tab">我的人气</a></li>
                                </ul>
                                <script>
                                $(document).ready(function() {
                                        //                                    $("#a1").css("nav-active");
                                        var card = $("#nav-tab li");
                                        for (var i = 0; i < card.length; i++) {
                                            card[i].onclick = function() {
                                                for (var j = 0; j < card.length; j++) {
                                                    card[j].className = '';
                                                    //                                                console.log(card[j])
                                                }
                                                console.log($(this))
                                                $(this).removeClass("active");
                                                $(this).addClass("nav-active");
                                            }
                                        }
                                        //                                    $("#nav-tab a").on("click",function () {
                                        //                                        $(this).addClass("nav-active");
                                        //                                    })
                                    })
                                    //                                $(document).ready(function () {
                                    //                                    $('#nav-tab a').on("change", function() {
                                    //                                        $(this).parent().addClass('nav-active').siblings().removeClass('nav-active');
                                    //                                    });
                                    //                                });
                                </script>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab1">
                                        <div class="comment">
                                            <div class="comment-header clearfix row">
                                                <div class="comment-face col-md-2 col-lg-2"><img src="/FS_siqi/Public/front/student/images/headpicbig.jpg" class="img-responsive"></div>
                                                <div class="comment-detail col-md-10  col-lg-10 ">
                                                    <div class="detail-header">
                                                        <div class="detail-info"><span><?php echo ($message["username"]); ?></span></div>
                                                        <div class="detail-from">
                                                            <span class="from-time"><?php echo (substr($message["time"],0,10)); ?></span> 来自
                                                            <span class="from-text">fs.com</span>
                                                        </div>
                                                    </div>
                                                    <div class="detail-text">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><img src="/FS_siqi/Public/front/student/images/class_ground.png" class="img-responsive" alt="" width="100%;"></div>
                                                                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><img src="/FS_siqi/Public/front/student/images/class_ground.png" class="img-responsive" alt="" width="100%;"></div>
                                                                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><img src="/FS_siqi/Public/front/student/images/class_ground.png" class="img-responsive" alt="" width="100%;"></div>
                                                                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><img src="/FS_siqi/Public/front/student/images/class_ground.png" class="img-responsive" alt="" width="100%;"></div>
                                                                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><img src="/FS_siqi/Public/front/student/images/class_ground.png" class="img-responsive" alt="" width="100%;"></div>
                                                                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><img src="/FS_siqi/Public/front/student/images/class_ground.png" class="img-responsive" alt="" width="100%;"></div>
                                                                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><img src="/FS_siqi/Public/front/student/images/class_ground.png" class="img-responsive" alt="" width="100%;"></div>
                                                                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><img src="/FS_siqi/Public/front/student/images/class_ground.png" class="img-responsive" alt="" width="100%;"></div>
                                                                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><img src="<?php echo ($message["path"]); ?>" class="img-responsive" alt="" width="100%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-footer">
                                                <ul class="clearfix comment-footer-ul">
                                                    <li><a href="#"><span class="pos"><i class="glyphicon glyphicon-star"></i> 收藏</span></a></li>
                                                    <li><a href="#"><span class="pos"><i class="glyphicon glyphicon-comment"></i> 评论</span></a></li>
                                                    <li><a href="#"><span class="pos"><i class="glyphicon glyphicon-send"></i> 转发</span></a></li>
                                                    <li><a href="#"><span class="pos"><i class="glyphicon glyphicon-thumbs-up"></i> 赞</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <div class="comment-header clearfix row">
                                                <div class="comment-face  col-md-2 col-lg-2"><img src="/FS_siqi/Public/front/student/images/headpicbig.jpg" class="img-responsive"></div>
                                                <div class="comment-detail col-md-10 col-sm-10 col-lg-10 col-xs-10">
                                                    <div class="detail-info"><span><?php echo ($message["username"]); ?></span></div>
                                                    <div class="detail-from">
                                                        <span class="from-time"><?php echo (substr($message["time"],0,10)); ?></span> 来自
                                                        <span class="from-text">www.baidu.com</span>
                                                    </div>
                                                    <div class="detail-text">
                                                        <p><?php echo ($message["message"]); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-footer">
                                                <ul class="clearfix comment-footer-ul">
                                                    <li><a href="#"><span class="pos"><i class="glyphicon glyphicon-star"></i> 收藏</span></a></li>
                                                    <li><a href="#"><span class="pos"><i class="glyphicon glyphicon-comment"></i> 评论</span></a></li>
                                                    <li><a href="#"><span class="pos"><i class="glyphicon glyphicon-send"></i> 转发</span></a></li>
                                                    <li><a href="#"><span class="pos"><i class="glyphicon glyphicon-thumbs-up"></i> 赞</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <p>
                                            Howdy, I'm in Section 2.
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="tab3">
                                        <p>
                                            Howdy, I'm in Section 3.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--页脚-->
                
            </div>
        </div>
    </div>
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