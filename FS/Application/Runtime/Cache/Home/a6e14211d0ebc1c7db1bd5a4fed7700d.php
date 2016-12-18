<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <title>布置作业</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="/FS/Public/front/teacher/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 800px) and (max-device-width: 1100px)" href="/FS/Public/front/teacher/css/checkhomework1024.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-width: 1240px) and (max-device-width: 2000px)" href="/FS/Public/front/teacher/css/checkhomework.css" />
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
    <div class="row clearfix" id="content" style="height:600px;">
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
        <!--内容右侧-->
        <div class="col-md-7 column" id="content_h">
            <div class="row clearfix">
                <div class="col-md-12 column" id="right1">
                    <h4 id="title">一年级20班 2016年11月17日作业报告</h4>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 column" id="right2">
                    <p id="homework">学生作业详情</p>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table ">
                        <tr>
                            <th scope="col">学生姓名</th>
                            <th scope="col">得分</th>
                            <th scope="col">作业内容</th>
                            <th scope="col">完成时间</th>
                            <th scope="col">完成情况(1:完成；0:未完成)</th>
                            <th scope="col">操作</th>
                        </tr>
                        <?php if(is_array($student)): $i = 0; $__LIST__ = $student;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$stu): $mod = ($i % 2 );++$i;?><tr>
                                <td><?php echo ($stu["realname"]); ?></td>
                                <td><?php echo ($stu["fenshu"]); ?></td>
                                <td>语文</td>
                                <td><?php echo (substr($stu["taskfinishtime"],0,10)); ?></td>
                                <td><?php echo ($stu["finishtask"]); ?></td>
                                <td>
                                    <a href="#id?<?php echo ($stu["id"]); ?>" data-toggle="modal" data-target="#myModal" class="write-commit">写评语</a>
                                    <a href="#id?<?php echo ($stu["id"]); ?>" data-toggle="modal" data-target="#myModalSee" class="see-commit" id="check_che">查看</a>
                                    <a href="#">奖学豆</a>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">写评语</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="select" class="col-sm-2 control-label">请选择</label>
                                <div class="col-sm-10">
                                    <select class="form-control select-commit">
                                        <option>你真棒！</option>
                                        <option>继续努力！</option>
                                        <option>思维缜密</option>
                                        <option>有待提高</option>
                                        <option>请继续保持！</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <textarea class="form-control select-commit-result" rows="3" cols="20"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary colse-save" data-dismiss="modal">保存</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModalSee" tabindex="-1" role="dialog" aria-labelledby="myModalLabelSee" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabelSee">评语</h4>
                    </div>
                    <div class="modal-body">
                        <div>
                            <textarea class="form-control select-commit-result" rows="3" cols="20"></textarea>
                        </div>
                    </div>
                    <!--<div class="modal-footer">
                    <button type="button" class="btn btn-primary colse-save" data-dismiss="modal">保存</button>
                </div>-->
                </div>
            </div>
        </div>
        <script>
        $(document).ready(function() {
            $(".select-commit").on("change", function() {
                var text = $(".select-commit").val();
                $(".select-commit-result").text(text);
            });
            var commit = $(".write-commit");

            // console.log(commit[i]);
            $(".colse-save").click(function() {
                for (var i = 0; i < commit.length; i++) {
                    console.log(commit[i]);
                    $(commit[i]).css("display", "none");
                    $(commit[i]).next(".see-commit").css("display", "inline");
                };
            });

        })
        </script>
    </div>
    <div class="col-md-2 column"></div>
    </div>
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