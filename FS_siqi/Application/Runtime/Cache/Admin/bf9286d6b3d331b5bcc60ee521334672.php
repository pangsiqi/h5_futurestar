<?php if (!defined('THINK_PATH')) exit();?> 
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>未来之星后台管理系统-登录</title>
    <link rel="stylesheet" href="/FS/Public/end/css/bootstrap.css">
    <link href="/FS/Public/end/css/jquery-ui.css" rel="stylesheet">
    <link href="/FS/Public/end/css/mystyle.css" rel="stylesheet">
    <script src="/FS/Public/end/js/jquery.js"></script>
    <script src="/FS/Public/end/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top bg" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header"> <span class="navbar-logo"> 未来之星后台管理系统</span></div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
            <div class="btn-group ">
                <button type="button" class="btn btn-bg active"><span class="glyphicon glyphicon-heart"></span> </button>
                <button type="button" class="btn btn-bg"><span class="glyphicon glyphicon-question-sign"></span></button>
            </div>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="list-group login" style="height: 100%;">
                <div class="list-group-item bg active">
                    <span class="glyphicon glyphicon-lock"></span> <strong class="font14">用户登录</strong>
                </div>
                <div class="list-group-item">
                    <form role="form" method="post" action="">
                        <div class="input-group">
                            <span class="input-group-addon">用户名：</span>
                            <input type="text" class="form-control" name="username" placeholder="">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">密<img src="/FS/Public/end/images/em.png" width="12" height="20">码：</span>
                            <input type="password" class="form-control" name="password" placeholder="">
                        </div>
                       <!--  <div class="row yz">
                            <div class="col-md-8">
                                <div class="input-group">
                                    <span class="input-group-addon">验证码：</span>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-3"><img src="/FS/Public/end/images/yzm.gif" width="78" height="30" class="yzm"></div>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> 记住密码
                            </label>
                        </div> -->
                        <div class="input-group">
                            <button type="submit" class="btn btn-bg "> &nbsp;&nbsp;登&nbsp;&nbsp;录&nbsp;&nbsp;</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</body>

</html>