<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="format-detection" content="telephone=yes"/>
    <meta name="msapplication-tap-highlight" content="no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$selfWebInfo->name}}</title>
    <meta name="keywords" content="IT学习之家，PHP学习，web学习，vue学习，热门IT网址，时事政治，散文，捧腹笑话" />
    <meta name="description" content="IT学习之家，PHP学习，web学习，vue学习，热门IT网址，时事政治，散文，捧腹笑话" />
    <link rel="shortcut icon" href="/home/images/logo2.jpg">
    <script src="/home/js/jquery.min.js"></script>
    <script src="/home/js/bootstrap.min.js"></script>
    <script src="/home/js/layer/layer.js"></script>

    <link rel="stylesheet" type="text/css" media="screen" href="/home/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/home/css/style1.css">
</head>
<style>
    .f_show{
        display: none;
    }
    .show:hover .f_show {
        display: block;
        width:90%;,
    height:60px;
        background:#f5f5f5;
        position:absolute;
        /*animation:myfirst 5s;*/
        -webkit-animation:myfirst 0.5s;
        animation-fill-mode: forwards;
        opacity:0.8;
    }
    .show:hover .f_show span{
        height:60px;
        position:absolute;
        color: #000;
        display: -webkit-box;
        overflow: hidden;
        text-overflow: ellipsis;
        text-align: left;
        word-wrap: break-word;
        white-space: normal !important;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        opacity:1;
        -webkit-animation:myfirst 0.5s;

    }
    @-webkit-keyframes myfirst /* Safari and Chrome */
    {
        0%   {background:#f5f5f5;height:0;bottom:0;}
        100% {background:#f5f5f5;height:60px;bottom:0;}
    }
</style>
<body>
<header>
    <nav class="navbar navbar-default" id="navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar" aria-expanded="false">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1 class="logo">
                    <a href="">勇☆贳&卟☆莣</a>
                </h1>

            </div>
            <div class="collapse navbar-collapse" id="header-navbar">
                <form class="navbar-form visible-xs" action="#" method="POST">
                    <div class="input-group">
                        <input type="text" name="keyword" class="form-control" placeholder="请输入关键字" maxlength="20" autocomplete="off">
                        <span class="input-group-btn">
                                <button type="submit" class="btn btn-default btn-search">搜索</button>
                            </span>
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://www.zhyong.top">首页</a></li>
                    <li><a href="http://www.zhyong.top/index/article/htmloption/mobile/1">Web文章</a></li>
                    <li><a href="http://www.zhyong.top/index/article/phpoption/mobile/1">后端文章</a></li>
                    <li><a href="http://www.zhyong.top/index/article/gossip/mobile/1">随笔</a></li>
                    <li><a href="http://m.zhyong.top">常用网站</a></li>
                    {{--<li><a href="{{url('home/index/vue')}}">测试</a></li>--}}
                    <li><a href="http://we.zhyong.top">捧腹笑话</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="container" style="text-align: center;">
    <div class="row" style="text-align: center;">
        @foreach ($data as $info)
            <div class="col-md-3 col-sm-6 col-xs-14 show" style="position:relative;height: 190px;padding: 10px 16px;">
                <a href="{{$info->web_address}}" target="_blank" style="width: 100%;text-align: center;">
                    <img  src="{{$info->img}}" alt="" style="text-align: center;padding: 10px 16px;height: 160px;width: 100%;transform: translate(0, 0);border: 1px solid #f0ad4e;">
                </a>
                <div style="text-align: center;width: 100%;">{{$info->name}}</div>
                <div class="f_show" style="border: 1px solid #f5f5f5">
                    <span style="">{{$info->intro}}</span>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="footer" style="padding-top: 20px;">
    <div class="container"  style="height: 22px;">
        <p style="height: 22px;">{{$selfWebInfo->intro}}-  <a href="https://new.cnzz.com/v1/login.php?siteid=5329134">网站统计<img style="width: 40px;height: 10px;display: inline;" src="/home/images/2.gif"></a></p>
    </div>
</div>
</body>
</html>
