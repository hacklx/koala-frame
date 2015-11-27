<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title>会员中心 - <?php echo L('member').L('manage_center');?></title>
<link href="__CSS__/reset.css" rel="stylesheet" type="text/css" />
<link href="__CSS__/table_form.css" rel="stylesheet" type="text/css" />
<link href="__CSS__/login.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__STATIC__/Jquery/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$('#code_img').click(function(){
		$('#code_img').attr('src',"<?php echo U('verify');?>&time="+new Date())
	})
})
</script>

<link href="__CSS__/dialog_simp.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
	<div class="content">
	<div class="logo"><a href="<?php echo ($siteinfo['domain']); ?>"><img src="__IMG__/v9/member_logo.jpg"/></a></div>
    <span class="rt log"></span>
    </div>
</div>
<div id="content">
<div class="col-left form-login" id="logindiv">
<form method="post" action="" onsubmit="save_username();" id="myform" name="myform">
<input type="hidden" name="forward" id="forward" value="<?php echo ($forward); ?>">
    	<h2><?php echo (L("member")); echo L('login');?></h2>
    	<div class="input">
			<label><?php echo L('username');?>：</label><input type="text" id="username" name="username" size="22" class="input-text">
		</div>
        <div class="input">
			<label><?php echo L('password');?>：</label><input type="password" id="password" name="password" size="22" class="input-text">
		</div>
        <div class="input">
			<label><?php echo L('checkcode');?>：</label><input type="text" id="verify" name="verify" size="8" class="input-text"><img id="code_img" src="<?php echo U('verify');?>" width="120" height="26">
		</div>
        <div class="take">
		<input type="checkbox" name="cookietime" value="2592000" id="cookietime"> <?php echo L('remember'); echo L('username');?>
		<a href="index.php?m=member&c=index&a=public_get_password_type&siteid=<?php echo ($siteid); ?>" class="blue"><?php echo L('forgetpassword');?></a><br />
		<div class="submit"><input type="submit" name="dosubmit" id="dosubmit" value="<?php echo L('login');?>"></div></div>
        <div class="hr"><hr /></div>
        <div class="reg"><?php echo L('no_account');?><br />
        	<div class="submit"><input type="button" name="register" value="<?php echo L('immediately').L('register');?>" onclick="redirect('{APP_PATH}index.php?m=member&c=index&a=register&siteid=<?php echo ($siteid); ?>')"></div></div>
</form>
</div>
    <div class="col-auto">
    		<div class="col-1">
            	<div class="content">
                	<h5><strong><?php echo L('use_passport');?></strong></h5>
                    <div class="pass-logo">
                    	<ul class="item login-list clear blue">
                        <?php if(C('snda_akey') || C('snda_skey') ): ?><li style="margin-right:14px;"><a href="javascript:;" onclick="show_login('snda');return false;" style="background-image:url(__IMG__/member/logo/snda_16_16.png)">盛大通行证</a></li><?php endif; ?>
                        <?php if(C('sina_akey') || C('sina_skey') ): ?><li><a href="javascript:;" onclick="show_login('sina');return false;" style="background-image:url(__IMG__/member/logo/sina_16_16.png)">新浪微博登录</a></li><?php endif; ?>

						<?php if(C('qq_akey') || C('qq_skey') ): ?><li style="margin-right:14px;"><a href="javascript:;" onclick="show_login('qq');return false;" style="background-image:url(__IMG__/member/logo/qq_16_16.png)">腾讯微博登录</a></li><?php endif; ?>
						<?php if(C('qq_appkey') || C('qq_appid') ): ?><li style="margin-right:14px;"><a href="{APP_PATH}index.php?m=member&c=index&a=public_qq_loginnew" target="_blank" style="background-image:url(__IMG__/member/logo/qq_16_16.png)">腾讯QQ登录</a></li><?php endif; ?>
                        </ul>
                        <p>
                        	<span class="blue"><?php echo L('other_passport_introduce');?></span>
                            <br />
							<?php echo L('other_passport_info');?>
                        </p>
                    </div>
       	        </div>
            	<span class="o1"></span><span class="o2"></span><span class="o3"></span><span class="o4"></span>
            </div>
    </div>
</div>
<div id="footer">
<a href="http://guanblog.sinaapp.com/" target="_blank">友情链接</a>

<p class="cp">Powered by <strong><a href="http://guanblog.sinaapp.com/" target="_blank">Gms管理系统</a></strong> <em>v1.11</em> &copy; <?php echo date('Y');?> <img src="__IMG__/copyright.gif"/>
</p>
</div>
</body>
</html>