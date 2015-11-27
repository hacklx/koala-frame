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
      
  <h1>Step.2</h1>
  <h2>创建数据库</h2>
  <h5>填写数据库及站点相关信息</h5>

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
    
  <?php
 defined('SAE_MYSQL_HOST_M') or define('SAE_MYSQL_HOST_M', '127.0.0.1'); defined('SAE_MYSQL_HOST_M') or define('SAE_MYSQL_PORT', '3306'); ?>
  <form action="/gms/install.php?m=Install&amp;c=Install&amp;a=step2" method="post" target="_self" id="form">
    <div class="form-box control-group">
      <fieldset><input name="db[]" type="hidden" value="mysql" />
          <div>
            <label>数据库服务器</label>
            <input type="text" name="db[]" value="<?php if(defined("SAE_MYSQL_HOST_M")): echo (SAE_MYSQL_HOST_M); else: ?>127.0.0.1<?php endif; ?>">
            <span>数据库服务器IP，一般为127.0.0.1</span>
          </div>
          <div>
            <label>数据库名</label>
            <input type="text" name="db[]" value="<?php if(defined("SAE_MYSQL_DB")): echo (SAE_MYSQL_DB); endif; ?>">
          </div>
          <div>
            <label>数据库用户名</label>
            <input type="text" name="db[]" value="<?php if(defined("SAE_MYSQL_USER")): echo (SAE_MYSQL_USER); endif; ?>">
          </div>
          <div>
            <label>数据库密码</label>
            <input type="password" name="db[]" value="<?php if(defined("SAE_MYSQL_PASS")): echo (SAE_MYSQL_PASS); endif; ?>">
          </div>
          <div>
            <label>数据库端口</label>
            <input type="text" name="db[]" value="<?php if(defined("SAE_MYSQL_PORT")): echo (SAE_MYSQL_PORT); else: ?>3306<?php endif; ?>">
            <span>数据库服务连接端口，一般为3306</span> </div>
          <div>
            <label>数据表前缀</label>
            <input type="text" name="db[]" value="gms_">
            <span>同一个数据库运行多个系统时请修改为不同的前缀</span>
          </div>
      </fieldset>
      <fieldset>
        <legend>创始人信息</legend>
        <div>
          <label>用户名</label>
          <input type="text" name="admin[]" value="admin">
        </div>
        <div>
          <label>密码</label>
          <input type="password" name="admin[]" value="">
        </div>
        <div>
          <label>确认密码</label>
          <input type="password" name="admin[]" value="">
        </div>
        <div>
          <label>邮箱</label>
          <input type="text" name="admin[]" value="">
          <span>请填写正确的邮箱便于收取提醒邮件</span> </div>
      </fieldset>
    </div>
  </form>

  </div>
  <div class="btn-box">
    
<a class="btn btn-success btn-large" href="<?php echo U('Install/step1');?>">上一步</a>
<a id="next" href="javascript:void(0);" class="btn btn-primary" onclick="$('#form').submit();return false;">下一步</a></div>

  </div>
</div>

<div class="footer">
  <h5>Powered by <font class="blue">Gms</font><font class="orange">管理系统</font></h5>
  <h6>&copy; 2007-2014 <a href="http://www.thinkgms.com" target="_blank">Tianjin Netcity Networking Inc.</a> All Rights Reserved.</h6>
</div>
</body>
</html>