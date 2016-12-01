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
                <li><a href="#" class="navbar-brand"><span class="glyphicon glyphicon-log-out"></span>退出系统</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
    <div class="row">
        <div class=" col-md-2 sidebar">
            <div id="accordion">
                <h3><a href="#"><span class="glyphicon glyphicon-user"></span>教师管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
                <ul>
                    <li><a href="/FS/index.php/Admin/T/add.html">添加教师</a></li>
                    <li><a href="/FS/index.php/Admin/T/lists.html">管理教师</a></li>
                </ul>
                <h3 aria-selected="true" aria-expanded="true"><a href="#"><span class="glyphicon glyphicon-file"></span>资源管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
                <ul>
                    <li><a href="/FS/index.php/Admin/R/add.html">添加资源</a></li>
                    <li><a href="/FS/index.php/Admin/R/lists.html">列表资源</a></li>
                </ul>
            </div>
        </div>
        
        <div class="col-md-10 col-md-offset-2 ">
            <ol class="breadcrumb">
                <li><a href="main.html">首页</a></li>
                <li><a href="#">资源管理</a></li>
                <li class="active">添加资源</li>
            </ol>
            <h3 class="down">添加资源 <small>Resource Add</small></h3>
            <div class="list-group form">
                <form enctype="multipart/form-data" class="form-horizontal" role="form">
                    <div class="list-group-item">
                        <label for="inputEmail3" class="col-sm-2 control-label">资源名称</label>
                        <div class="col-sm-10">
                            <input type="input" name="title" class="form-control" id="inputEmail3" placeholder="">
                        </div>
                    </div>
                    <div class="list-group-item">
                        <label for="inputEmail3" class="col-sm-2 control-label">资源封面</label>
                        <div class="col-sm-10">
                            <input type="file" name="bookPic" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="list-group-item">
                        <label for="inputEmail3" class="col-sm-2 control-label">发布人</label>
                        <div class="col-sm-10">
                            <input type="input" name="author" class="form-control" id="inputEmail3" placeholder="">
                        </div>
                    </div>
                    <div class="list-group-item">
                        <label for="inputEmail3" class="col-sm-2 control-label">添加时间</label>
                        <div class="col-sm-10">
                            <input type="input" name="addtime" class="form-control" id="inputEmail3" value="">
                        </div>
                    </div>
                    <div class="list-group-item">
                        <label for="inputEmail3" class="col-sm-2 control-label">摘要</label>
                        <div class="col-sm-10">
                            <textarea id="editor_id" name="summary" style="width:90%;height:300px;">
                                请添加资源摘要</textarea>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="col-sm-offset-2 col-sm-5">
                            <div class="row">
                                <div class=" col-sm-5">
                                    <button type="submit" class="btn btn-primary">添 加 资 源</button>
                                </div>
                                <div class=" col-sm-5">
                                    <button type="submit" class="btn btn-warning">重 置 内 容</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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