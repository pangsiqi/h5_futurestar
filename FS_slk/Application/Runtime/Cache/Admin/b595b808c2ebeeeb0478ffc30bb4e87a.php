<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>未来之星后台管理系统</title>
    <link rel="stylesheet" href="/FS/Public/end/css/bootstrap.css">
    <link href="/FS/Public/end/css/jquery-ui.css" rel="stylesheet">
    <link href="/FS/Public/end/css/mystyle.css" rel="stylesheet">
    <script src="/FS/Public/end/js/jquery.js"></script>
    <script src="/FS/Public/end/js/bootstrap.min.js"></script>
    <script charset="utf-8" src="/FS/Public/end/js/editor/kindeditor.js"></script>
    <script charset="utf-8" src="/FS/Public/end/js/editor/lang/zh_CN.js"></script>
    <script>
    KindEditor.ready(function(K) {
        window.editor = K.create('#editor_id');
    });
    </script>
    <style type="text/css">
    .page a,.page span{
          padding: 15px;
          border:1px solid red;position: relative;
        float: left;
        padding: 6px 12px;
        line-height: 1.42857143;
        text-decoration: none;
        color: #20bdf0;
        background-color: #ffffff;
        border: 1px solid #dddddd;
        margin-left: -1px;
    }
    .page a:hover{
          background: #DDDDDD;
    }
    .page span{
          z-index: 2;
        color: #ffffff;
        background-color: #20bdf0;
        border-color: #20bdf0;
        cursor: default;
    }
</style>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <span class="navbar-logo"> 未来之星后台管理系统</span>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right mr">
                <li><a href="#" class="navbar-brand"><span class="glyphicon glyphicon-star"></span>欢迎：Administrator</a></li>
                <li><a href="/FS/index.php/Admin/A/logout" class="navbar-brand"><span class="glyphicon glyphicon-log-out"></span>退出系统</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
    <div class="row">
        <div class=" col-md-2 sidebar">
            <div id="accordion">
                <h3><a href="#"><span class="glyphicon glyphicon-user"></span>教师管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
                <ul>
                    <li><a href="/FS/index.php/Admin/T/edit.html">修改教师</a></li>
                    <li><a href="/FS/index.php/Admin/T/lists.html">管理教师</a></li>
                </ul>
                <h3 aria-selected="true" aria-expanded="true"><a href="#"><span class="glyphicon glyphicon-file"></span>资源管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
                <ul>
                    <li><a href="/FS/index.php/Admin/R/add.html">添加资源</a></li>
                    <li><a href="/FS/index.php/Admin/R/lists.html">列表资源</a></li>
                </ul>
                <h3 aria-selected="true" aria-expanded="true"><a href="#"><span class="glyphicon glyphicon-file"></span>作业管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
                <ul>
                    <li><a href="/FS/index.php/Admin/S/add.html">添加作业</a></li>
                    <li><a href="/FS/index.php/Admin/S/lists.html">列表作业</a></li>
                </ul>
            </div>
        </div>
        
        <div class="col-md-10 col-md-offset-2 ">
            <ol class="breadcrumb">
                <li><a href="#">首页</a></li>
            </ol>
            <div class="row pad">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="/FS/Public/end/images/main1.gif" width="63" height="63" class="pull-left img1">
                            <div class=" nr">
                                <h5>教师列表</h5>
                                <p>用于查看教师信息，包括姓名、教师号、班级、学科，并且可以对教师信息进行修改、删除</p>
                            </div>
                            <button type="button" class="btn btn-primary pull-right" onclick="window.location.href='/FS/index.php/Admin/T/lists'">点击进入
                                <span class="glyphicon glyphicon-circle-arrow-right"></span>
                            </button>
                            <span class="info">已经存在：<span class="red"><?php echo ($tc); ?></span>条</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="/FS/Public/end/images/main2.gif" width="63" height="63" class="pull-left img1">
                            <div class=" nr">
                                <h5>资源列表</h5>
                                <p>用于查看资源信息，包括资源名称、封面、发布人、添加时间、简述，并且可以对资源进行修改、删除</p>
                            </div>
                            <button type="button" class="btn btn-primary pull-right" onclick="window.location.href='/FS/index.php/Admin/R/lists'">点击进入
                                <span class="glyphicon glyphicon-circle-arrow-right"></span>
                            </button>
                            <span class="info">已经存在：<span class="red"><?php echo ($rc); ?></span>条</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="/FS/Public/end/images/main2.gif" width="63" height="63" class="pull-left img1">
                            <div class=" nr">
                                <h5>作业列表</h5>
                                <p>用于查看作业信息，包括作业名称、封面、发布人、添加时间、简述，并且可以对作业进行修改、删除</p>
                            </div>
                            <button type="button" class="btn btn-primary pull-right" onclick="window.location.href='/FS/index.php/Admin/S/lists'">点击进入
                                <span class="glyphicon glyphicon-circle-arrow-right"></span>
                            </button>
                            <span class="info">已经存在：<span class="red"><?php echo ($sc); ?></span>条</span>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <script src="/FS/Public/end/js/jquery-ui.js"></script>
    <script>
    $("#accordion").accordion({
        heightStyle: "content"
    });
    </script>
</body>

</html>

        </div>
    <script src="/FS/Public/end/js/jquery-ui.js"></script>
    <script>
    $("#accordion").accordion({
        heightStyle: "content"
    });
    </script>
</body>

</html>