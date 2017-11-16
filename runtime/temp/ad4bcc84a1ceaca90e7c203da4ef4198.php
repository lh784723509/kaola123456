<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"E:\software\wamp\www\milk\public/../application/admin\view\index\main.html";i:1504612280;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台欢迎页</title>
	<link rel="stylesheet" href="__ADMIN__/css/reset.css" />
	<link rel="stylesheet" href="__ADMIN__/css/content.css" />
</head>
<body marginwidth="0" marginheight="0">
	<div class="container">
		<div class="public-nav">您当前的位置：<a href="">管理首页</a>></div>
		<div class="public-content">
			<div class="public-content-header">
				<h3>网站后台</h3>
			</div>
			<div class="public-content-cont">
				<p style="width: 100%;text-align: center; padding: 50px 0; font-size: 16px; color: #FF0000;"><?php echo \think\Session::get('res')['name']?\think\Session::get('res')['name']:"登录"; ?>管理员！ 欢迎登陆网站后台！</p>
			</div>
		</div>
	</div>
</body>
</html>