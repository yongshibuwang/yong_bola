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
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
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
                    <li><a href="{{$http}}://www.zhyong.top">首页</a></li>
                    <li><a href="{{$http}}://www.zhyong.top/index/article/htmloption/mobile/1">Web文章</a></li>
                    <li><a href="{{$http}}://www.zhyong.top/index/article/phpoption/mobile/1">后端文章</a></li>
                    <li><a href="{{$http}}://www.zhyong.top/index/article/gossip/mobile/1">随笔</a></li>
                    <li><a href="{{$http}}://m.zhyong.top">常用网站</a></li>
                    <li><a href="{{url('home/index/vue')}}">测试</a></li>
                    <li><a href="{{$http}}://www.zhyong.top/index/article/ling/mobile/1">捧腹笑话</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div>
    <div id="app">
        @{{ message }}
    </div>
    <div id="app-2">
  <span v-bind:title="message">
    鼠标悬停几秒钟查看此处动态绑定的提示信息！
  </span>
    </div>
    <div id="app-5">
        <p>@{{ message }}</p>
        <button v-on:click="reverseMessage">逆转消息</button>
    </div>
</div>
<script>
    var app = new Vue({
        el: '#app',
        data: {
            message: 'Hello Vue!'
        }
    })
    var app2 = new Vue({
        el: '#app-2',
        data: {
            message: '页面加载于 ' + new Date().toLocaleString()
        }
    })
    var app5 = new Vue({
        el: '#app-5',
        data: {
            message: 'Hello Vue.js!'
        },
        methods: {
            reverseMessage: function () {
                this.message = this.message.split('').reverse().join('')
            }
        }
    })
</script>
<div class="footer" style="padding-top: 20px;">
    <div class="container"  style="height: 22px;">
        <p style="height: 22px;">{{$selfWebInfo->intro}}-  <a href="https://new.cnzz.com/v1/login.php?siteid=5329134">网站统计<img style="width: 40px;height: 10px;display: inline;" src="/home/images/2.gif"></a></p>
    </div>
</div>
</body>
</html>