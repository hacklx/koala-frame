<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gms管理系统安装</title>
<link href="/gms/Public/Install/css/install.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/gms/Public/Install/js/jquery.js"></script>
</head>
<body>
<div class="header">
  <div class="layout">
    <div class="title">
      <h5>Gms管理系统v1.1.1</h5>
      <h2>系统安装向导</h2>
    </div>
    <div class="version">版本:20151027</div>
  </div>
</div>
<div class="main">
  <div class="step-box" id="step1">
    <div class="text-nav">
      
      <h1>Step.3</h1>
      <h2>安装数据库</h2>
      <h5>正在执行数据库安装</h5>

    </div>
    <div class="procedure-nav">
      <div class="schedule-ico"><span class="a"></span><span class="b"></span><span class="c"></span><span class="d"></span></div>
      <div class="schedule-point-now"><span class="a"></span><span class="b"></span><span class="c"></span><span class="d"></span></div>
      <div class="schedule-point-bg"><span class="a"></span><span class="b"></span><span class="c"></span><span class="d"></span></div>
      <div class="schedule-line-now"><em></em></div>
      <div class="schedule-line-bg"></div>
      <div class="schedule-text"><span class="a">检查安装环境</span><span class="b">选择安装方式</span><span class="c">创建数据库</span><span class="d">安装</span></div>
    </div>
  </div>
  <div class="content-box">
    
    <div id="show-list" class="license">
    </div>
    <script type="text/javascript">
        var list   = document.getElementById('show-list');
        function showmsg(msg, classname){
            var li = document.createElement('p'); 
            li.innerHTML = msg;
            classname && li.setAttribute('class', classname);
            list.appendChild(li);
            document.scrollTop += 30;
        }
    </script>

  </div>
  <div class="btn-box">
    
<a href="javascript:void(0);" id="install_process" class="btn btn-primary">正在安装 ...</a>

  </div>
</div>

<div class="footer">
  <h5>Powered by <font class="blue">Gms</font><font class="orange">管理系统</font></h5>
  <h6>&copy; 2007-2014 <a href="http://www.thinkgms.com" target="_blank">Tianjin Netcity Networking Inc.</a> All Rights Reserved.</h6>
</div>
</body>
</html>