<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"E:\software\wamp\www\milk\public/../application/admin\view\index\login.html";i:1504833822;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="__ADMIN__/css/reset.css" />
	<link rel="stylesheet" href="__ADMIN__/css/login.css" />
</head>
<body>
<div class="page">
	<div class="loginwarrp">
		<div class="logo">管理员登陆</div>
        <div class="login_form">
			<form id="Login" name="Login" method="post" onsubmit="" action="<?php echo url('index/dologin'); ?>">
				<li class="login-item">
					<span>用户名：</span>
					<input type="text" name="username" class="login_input">
				</li>
				<li class="login-item">
					<span>密　码：</span>
					<input type="password" name="password" class="login_input">
				</li>
				<li class="login-item verify">
					<span>验证码：</span>
					<input type="text" name="checkcode" class="login_input verify_input">
				</li>
				<div>
					<img src="<?php echo captcha_src(); ?>" alt="captcha" style="margin-top:10px;margin-left:8px" onclick="this.src='<?php echo captcha_src(); ?>?id='+Math.random();"/>
				</div>
				<div class="clearfix"></div>
				<li class="login-sub">
					<input type="submit" value="登录"/>
				</li> 
				<li><span style="display:inline-block;margin-top:15px;margin-left:5px;color:red"><?php echo !empty($res)?$res:""; ?></span>
				</li>                     
           </form>
		</div>
	</div>
</div>
</body>
</html>