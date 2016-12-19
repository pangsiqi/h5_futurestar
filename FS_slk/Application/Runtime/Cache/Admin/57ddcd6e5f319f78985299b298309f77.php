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
                    <li><a href="/FS/index.php/Admin/R/edit.html">修改资源</a></li>
                    <li><a href="/FS/index.php/Admin/R/lists.html">列表资源</a></li>
                </ul>
            </div>
        </div>
        
        <div class="col-md-10 col-md-offset-2 ">
            <ol class="breadcrumb">
                <li><a href="main.html">首页</a></li>
                <li><a href="#">教师管理</a></li>
                <li class="active">修改教师信息</li>
            </ol>
            <h3 class="down">修改教师信息 <small>Teacher Edit</small></h3>
            <div class="list-group form">
                <form enctype="multipart/form-data" method="post" class="form-horizontal" role="form" >
                <input type="hidden" name="id" value="<?php echo ($teacher["id"]); ?>" />
                <div class="list-group-item">
                        <label for="inputEmail3" class="col-sm-2 control-label">教师号</label>
                        <div class="col-sm-10">
                            <input type="input" name="teacher_id" class="form-control" id="inputEmail3" value="<?php echo ($teacher["id"]); ?>">
                        </div>
                    </div>
                    <div class="list-group-item">
                        <label for="inputEmail3" class="col-sm-2 control-label">姓名</label>
                        <div class="col-sm-10">
                            <input type="input" name="name" class="form-control" id="inputEmail3" placeholder="" value="<?php echo ($teacher["realname"]); ?>">
                        </div>
                    </div>
                    
                    <div class="list-group-item">
                        <label for="inputEmail3" class="col-sm-2 control-label">班级</label>
                        <div class="col-sm-10">
                            <input type="input" name="grade" class="form-control" id="inputEmail3" placeholder="" value="<?php echo ($teacher["grade"]); ?>">
                        </div>
                    </div>
                    <div class="list-group-item">
                        <label for="inputEmail3" class="col-sm-2 control-label">学科</label>
                        <div class="col-sm-10">
                            <input type="input" name="subject" class="form-control" id="inputEmail3" placeholder="" value="<?php echo ($teacher["subject"]); ?>">
                        </div>
                    </div>
                    <div class="list-group-item">
                        <label for="inputEmail3" class="col-sm-2 control-label">市</label>
                        <div class="col-sm-10">
                            <input type="input" name="city" class="form-control" id="inputEmail3" placeholder="" value="<?php echo ($teacher["city"]); ?>">
                        </div>
                    </div>
                    <div class="list-group-item">
                        <label for="inputEmail3" class="col-sm-2 control-label">区</label>
                        <div class="col-sm-10">
                            <input type="input" name="township" class="form-control" id="inputEmail3" placeholder="" value="<?php echo ($teacher["township"]); ?>">
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="col-sm-offset-2 col-sm-5">
                            <div class="row">
                                <div class=" col-sm-5">
                                    <input type="submit" class="btn btn-primary" value="修 改 教 师">
                                </div>
                                <div class=" col-sm-5">
                                    <!-- <input type="reset" class="btn btn-warning" value="重 置 内 容"> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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