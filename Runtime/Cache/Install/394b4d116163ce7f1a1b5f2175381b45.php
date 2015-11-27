<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gms管理系统v1.1.1 - 安装向导</title>
<link href="/gms/Public/Install/css/install.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/gms/Public/Install/js/jquery.js"></script>
<script type="text/javascript" src="/gms/Public/Install/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="/gms/Public/Install/js/jquery.mousewheel.js"></script>
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
  <div class="text-box" id="text-box">
    <div class="license">
      <h1>Gms管理系统安装协议</h1>
      <p>感谢您选择Gms管理系统。</p>
      <h3>I. 协议许可的权利</h3>
      <ol>
        <li>您可以在完全遵守本许可协议的基础上，将本软件应用于非商业用途，而不必支付软件版权许可费用。</li>
      </ol>
      <p></p>
      <p align="right">http://www.thinkgms.com/（2015年10月27日）</p>
    </div>
  </div>
  <div class="btn-box"><a href="<?php echo U('Install/step1');?>" class="btn btn-primary">同意协议进入安装</a><a href="http://www.thinkgms.com" class="btn">不同意</a></div>
</div>
<div class="footer">
  <h5>Powered by <font class="blue">Gms</font><font class="orange">管理系统</font></h5>
  <h6>&copy; 2007-2014 <a href="http://www.thinkgms.com" target="_blank">Tianjin Netcity Networking Inc.</a> All Rights Reserved.</h6>
</div>
<script type="text/javascript">
$(document).ready(function(){
	//自定义滚定条
	$('#text-box').perfectScrollbar();
});
</script>
</body>
</html>