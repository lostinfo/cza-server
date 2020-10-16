<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset=utf-8>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <!-- Styles -->
    <title>陈子昂文库</title>
    <link rel="stylesheet" href="/layui/css/layui.css">
    {{--    <link rel="stylesheet" href="/static/css/global.css">--}}
    <link rel="stylesheet" href="/static/css/app.css">
</head>
<body class="site-home" style="background-color: #eee;">
<div class="site-header">
    <div class="site-header-nav">
        <div class="layui-main site-header-nav-main">
            <div class="left">
                <span>您好！欢迎来到陈子昂文库！</span>
                <span>全国统一服务热线：028-88888888</span>
            </div>
            <div class="rifht">
                <ul>
                    <li>登陆</li>
                    <li>注册</li>
                    <li>文库首页</li>
                    <li>上传文档</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="layui-main site-header-content">
        <div class="search-title">陈子昂文库</div>
        <div class="search-content">
            <input type="text" class="search-input">
            <button class="search-button"><i class="layui-icon layui-icon-search"></i>搜索</button>
            <button class="upload-button">发布文档</button>
        </div>
        <div class="search-hot">
            <p>热门搜索：</p>
            <p class="tag">陈子昂诗歌</p>
            <p class="tag">陈子昂经历</p>
            <p>陈子昂故居</p>
        </div>
    </div>
</div>
<div class="layui-main">
    <ul class="site-idea">
        <li>
            <fieldset class="layui-elem-field layui-field-title">
                <legend>返璞归真</legend>
                <div class="file-list">
                    <div class="file-item">
                        <i class="wenku-icon-word"></i><span>陈子昂简介.docx</span>
                    </div>
                    <div class="file-item">
                        <i class="wenku-icon-ppt"></i><span>陈子昂简介.ppt</span>
                    </div>
                    <div class="file-item">
                        <i class="wenku-icon-pdf"></i><span>陈子昂简介.pdf</span>
                    </div>
                    <div class="file-item">
                        <i class="wenku-icon-txt"></i><span>陈子昂简介.txt</span>
                    </div>
                </div>
            </fieldset>
        </li>
        <li>
            <fieldset class="layui-elem-field layui-field-title">
                <legend>返璞归真</legend>
                <div class="file-list">
                    <div class="file-item">
                        <i class="wenku-icon-word"></i><span>陈子昂简介.docx</span>
                    </div>
                    <div class="file-item">
                        <i class="wenku-icon-ppt"></i><span>陈子昂简介.ppt</span>
                    </div>
                    <div class="file-item">
                        <i class="wenku-icon-pdf"></i><span>陈子昂简介.pdf</span>
                    </div>
                    <div class="file-item">
                        <i class="wenku-icon-txt"></i><span>陈子昂简介.txt</span>
                    </div>
                </div>
            </fieldset>
        </li>
        <li>
            <fieldset class="layui-elem-field layui-field-title">
                <legend>返璞归真</legend>
                <div class="file-list">
                    <div class="file-item">
                        <i class="wenku-icon-word"></i><span>陈子昂简介.docx</span>
                    </div>
                    <div class="file-item">
                        <i class="wenku-icon-ppt"></i><span>陈子昂简介.ppt</span>
                    </div>
                    <div class="file-item">
                        <i class="wenku-icon-pdf"></i><span>陈子昂简介.pdf</span>
                    </div>
                    <div class="file-item">
                        <i class="wenku-icon-txt"></i><span>陈子昂简介.txt</span>
                    </div>
                </div>
            </fieldset>
        </li>
    </ul>
</div>
<div class="layui-footer footer footer-index">
    <div class="layui-main">
        <p>© 2020 <a href="/">example.com</a> MIT license</p>
        <p>
            <a href="#" target="_blank" rel="nofollow">Link1</a>
            <a href="#" target="_blank" rel="nofollow">Link2</a>
        </p>
    </div>
</div>
{{--<div class="layui-main">--}}
{{--    <div class="wenku">--}}
{{--        <iframe src="https://view.officeapps.live.com/op/view.aspx?src=http://download.gaowei.me/%E9%99%88%E5%AD%90%E6%98%82%E7%AE%80%E4%BB%8B.docx" style="width: 100%; height: 100%;"></iframe>--}}
{{--    </div>--}}
{{--</div>--}}
<script src="/layui/layui.all.js"></script>
</body>
</html>
