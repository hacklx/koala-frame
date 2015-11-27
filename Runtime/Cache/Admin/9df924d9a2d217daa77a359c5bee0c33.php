<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理控制台 | <?php echo C('GMS_NAME');?></title>
<link href="/gms/Public/Admin/images/favicon.ico" mce_href="/gms/Public/Admin/images/favicon.ico" rel="bookmark" type="image/x-icon" /> 
<link href="/gms/Public/Admin/images/favicon.ico" mce_href="/gms/Public/Admin/images/favicon.ico" rel="icon" type="image/x-icon" /> 
<link href="/gms/Public/Admin/images/favicon.ico" mce_href="/gms/Public/Admin/images/favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
<link rel="stylesheet" type="text/css" href="/gms/Public/Static/Easyui/themes/metro/easyui.css">
<link rel="stylesheet" href="/gms/Public/Static/Font/iconfont.css">
<link rel="stylesheet" type="text/css" href="/gms/Public/Static/Easyui/themes/color.css">
<link rel="stylesheet" href="/gms/Public/Static/kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="/gms/Public/Static/kindeditor/themes/simple/simple.css" />
<link rel="stylesheet" type="text/css" href="/gms/Public/Admin/css/main.css">
<script type="text/javascript" src="/gms/Public/Static/Jquery/jquery.min.js"></script>
<script type="text/javascript" src="/gms/Public/Static/Easyui/jquery.easyui.min.js"></script>
<script type="text/javascript" src="/gms/Public/Static/Easyui/locale/easyui-lang-zh_CN.js"></script>
<script charset="utf-8" src="/gms/Public/Static/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="/gms/Public/Static/kindeditor/lang/zh_CN.js"></script>
<script charset="utf-8" src="/gms/Public/Static/Echarts/echarts.js"></script>
<script type="text/javascript" src="/gms/Public/Admin/js/main.js"></script>
<script>
var ke_pasteType=2;
var ke_fileManagerJson="<?php echo U('Admin/FilesUpdata/filemanager');?>";
var ke_uploadJson="<?php echo U('Admin/FilesUpdata/upload');?>";
var ke_Uid='<?php echo session(C("AUTH_KEY"));;?>';
var Root='/gms';
</script>
</head>
<body class="easyui-layout" id="Main_Layout_Box">
<div id="Main_Layout_North" data-options="region:'north',split:false">
  <div id="header_logo"> <a href="<?php echo U('Admin/Index/index');?>"><?php echo C('GMS_NAME');?></a> <i class="opacity-80">v1.1</i> <a class="justify" href="javascript:void(0);"></a></div>
  <ul id="header_nav" class="header_nav">
    <?php if(is_array($AdminMenu)): $i = 0; $__LIST__ = $AdminMenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a href="JavaScript:void(0);" onclick="<?php if($v['show_type'] == 0 ): ?>G_Ajax(this,'ul','Main_Layout_West','<?php echo U('Index/menu',array('pid'=>$v['id']));?>')
      <?php else: ?>
      G_Dialog(this,'Dialog_Main_<?php echo ($v['id']); ?>','<?php echo ($v['url']); ?>')<?php endif; ?>
      ">
      <li><?php echo ($v['title']); ?></li>
      </a><?php endforeach; endif; else: echo "" ;endif; ?>
  </ul>
  <ul class="header_nav" style="float:right">
    <a href="<?php echo U('Public/logout');?>"><li>退出</li></a>
  </ul>
</div>
<div id="Main_Layout_South" data-options="region:'south',split:false">Powered by <a href="<?php echo C('GMS_SITE');?>" style="color:#666"><?php echo C('GMS_NAME');?> v <?php echo C('GMS_VERSION');?></a> | Copyright © <a href="<?php echo C('GMS_AUTHOR_SITE');?>" style="color:#666"><?php echo C('GMS_AUTHOR');?></a> All rights reserved.</div>
<div id="Main_Layout_West" data-options="region:'west',split:false"></div>
<div id="Main_Layout_Center" data-options="region:'center',split:false" style="padding:5px;">
  <div id="MainTabs" class="easyui-tabs" data-options="fit:true,border:false">
    <div title="控制台" data-options="closable:false,id:-1,iconCls:'iconfont icon-all',bodyCls:'tabs_box'" style="padding: 5px;">

	<h2 class="h_a">系统信息</h2>
	<table border="0" cellpadding="0" cellspacing="0" class="update_from" style="width:100%">
		<?php if(is_array($server_info)): $i = 0; $__LIST__ = $server_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
        <th><?php echo ($key); ?> : </th>
        <td><?php echo ($vo); ?></td>
      	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
	<h2 class="h_a">系统数据统计</h2>
    <script language="javascript" type="text/javascript">
// 路径配置
require.config({
  paths: {
    echarts: 'Public/Static/Echarts'
	
  }
});

// 使用
require(
  [
    'echarts',
    'echarts/chart/bar', // 使用柱状图就加载bar模块，按需加载
  ],
  function (ec) {
    // 基于准备好的dom，初始化echarts图表
    var myChart = ec.init(document.getElementById('main'),'macarons'); 
    //设置数据
    var option = {
      //设置标题
      title:{
        text:'用户统计',
        subtext:'按季度统计本年度增加的用户数量.[目前数量只是测试使用，实际使用请在Index控制器中修改代码.]'
      },
      //设置提示
      tooltip: {
        show: true
      },
      //设置图例
      legend: {
        data:['用户总数']
      },
      //设置坐标轴
      xAxis : [
        {
          type : 'category',
          data : ["1-3","4-6","7-9","10-12"]
        }
      ],
      yAxis : [
        {
          type : 'value'
        }
      ],
      //设置数据
      series : [
        {
          "name":"用户总数",
          "type":"bar",
          "data":[<?php if(is_array($UserCount)): $i = 0; $__LIST__ = $UserCount;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; echo ($v); ?>,<?php endforeach; endif; else: echo "" ;endif; ?>],
        }
      ]
    };

    // 为echarts对象加载数据 
    myChart.setOption(option); 
  }
);
</script>
<!--注意因为有tabs的原因 所以ID请不要重复-->
	<div id="main" style="width:600px;height:400px"></div>
	<h2 class="h_a">开发团队</h2>
	<table border="0" cellpadding="0" cellspacing="0" class="update_from" style="width:100%">
	<tr><th>版权所有 : </th><td><a href="<?php echo C('GMS_SITE');?>" target="_blank"><?php echo C('GMS_NAME');?></a></span></td></tr>
	<tr><th>负责人 : </th><td><?php echo C('GMS_NAME');?></td></tr>
	<tr><th>版权所有 : </th><td><a href="<?php echo C('GMS_AUTHOR_SITE');?>" target="_blank"><?php echo C('GMS_AUTHOR');?></a></td></tr>
	<tr><th>联系邮箱 : </th><td><?php echo C('GMS_AUTHOR_EMAIL');?></td></tr>
	</table>
    </div>
  </div>
</div>
</body>
</html>
<script>
$(document).ready(function(){
	G_Ajax(this,'ul','Main_Layout_West','<?php echo U("Index/menu",array("pid"=>1));?>')
})
</script>