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
      
      <h1>Step.1</h1>
      <h2>开始安装</h2>
      <h5>检测服务器环境及文件目录权限</h5>

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
    
    <h1>环境检测</h1>
    <table width="100%" border="0" cellspacing="2" cellpadding="0">
      <caption>
      环境检查
      </caption>
        <thead>
            <tr>
                <th scope="col">项目</th>
                <th scope="col" width="33%">所需配置</th>
                <th scope="col" width="33%">当前配置</th>
            </tr>
        </thead>
        <tbody>
            <?php if(is_array($env)): $i = 0; $__LIST__ = $env;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($item[0]); ?></td>
                    <td><?php echo ($item[1]); ?></td>
                    <td><i class="ico-<?php echo ($item[4]); ?>">&nbsp;</i><?php echo ($item[3]); ?></td>       
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
	<?php if(isset($dirfile)): ?><table width="100%" border="0" cellspacing="2" cellpadding="0">
        <caption>目录、文件权限检查</caption>
        <thead>
            <tr>
                <th scope="col">目录/文件</th>
                <th scope="col" width="33%">所需状态</th>
                <th scope="col" width="33%">当前状态</th>
            </tr>
        </thead>
        <tbody>
            <?php if(is_array($dirfile)): $i = 0; $__LIST__ = $dirfile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($item[3]); ?></td>
                    <td><i class="ico-success">&nbsp;</i>可写</td>
                    <td><i class="ico-<?php echo ($item[2]); ?>">&nbsp;</i><?php echo ($item[1]); ?></td>   
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table><?php endif; ?>
    <table width="100%" border="0" cellspacing="2" cellpadding="0">
        <caption>函数依赖性检查</caption>
        <thead>
            <tr>
                <th scope="col">函数名称</th>
                <th scope="col" width="50%">检查结果</th>
            </tr>
        </thead>
        <tbody>
            <?php if(is_array($func)): $i = 0; $__LIST__ = $func;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($item[0]); ?>()</td>
                    <td><i class="ico-<?php echo ($item[2]); ?>">&nbsp;</i><?php echo ($item[1]); ?></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>

  </div>
  <div class="btn-box">
    
    <a class="btn btn-success btn-large" href="<?php echo U('Index/index');?>">上一步</a>
    <a class="btn btn-primary btn-large" href="<?php echo U('Install/step2');?>">下一步</a>

  </div>
</div>

<div class="footer">
  <h5>Powered by <font class="blue">Gms</font><font class="orange">管理系统</font></h5>
  <h6>&copy; 2007-2014 <a href="http://www.thinkgms.com" target="_blank">Tianjin Netcity Networking Inc.</a> All Rights Reserved.</h6>
</div>
</body>
</html>