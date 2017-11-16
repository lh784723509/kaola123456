<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"E:\software\wamp\www\milk\public/../application/home\view\recruit\recruit.html";i:1505134477;s:76:"E:\software\wamp\www\milk\public/../application/home\view\public\header.html";i:1505391837;s:74:"E:\software\wamp\www\milk\public/../application/home\view\public\foot.html";i:1505044302;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>企业招聘</title>
	<link rel="stylesheet" href="__HOME__/css/bootstrap.min.css">
	<link rel="stylesheet" href="__HOME__/css/recruit.css">
	<link rel="stylesheet" href="__HOME__/css/header.css">
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.nav_second li:last-child a{
			border-bottom:none;
		}
		.cat li:nth-child(5) ul{
		display:none;
		}
		.cat li:nth-child(5):hover ul{
			background:white;
			display:block;
		}
	</style>
</head>
<body>
	<!-- 导航栏 -->
	<div class="container header">
		<div class="row">
			<div class="col-md-8">
				<div class="navbar-header logo">
					<img src="__HOME__/images/logo.png" alt="">
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="nav nav-tabs fr login">
						<li>
							<?php if(\think\Session::get('res.name')): ?>
							<a href="<?php echo url('index/index'); ?>"><?php echo \think\Session::get('res.name'); ?>,您好！</a>
							<?php else: ?><a href="<?php echo url('index/dologin'); ?>">登录</a>
							<?php endif; ?>
						</li>
						<li><a href="">|</a></li>
						<li>
							<?php if(\think\Session::get('res.name')): ?>
							<a href="<?php echo url('index/loginout'); ?>">退出</a>
							<?php else: ?><a href="<?php echo url('index/register'); ?>">注册</a>
							<?php endif; ?>
						</li>
					</div>
				</div>
				<div class="row">
					<form class="navbar-form navbar-right">
						<div class="form-group">
						<input type="text" class="form-control" placeholder="请输出商品名称">
						<button class="btn btn-default" type="submit">搜索</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<!-- 菜单栏-->
	<div class="container menu">
		<div class="row">
			<div class="col-md-2">
			</div>
			<div class="col-md-10" style="position:relative">
				<ul class="nav nav-justified cat">
					<li><a href="<?php echo url('index/index'); ?>">首页</a></li>
					<?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
					<li>
						<a href="<?php if($cate['children'] != 0): ?>http://127.0.0.1/milk/public/index.php/home/index/index
						<?php else: ?>http://127.0.0.1/milk/public/index.php/home/<?php if($cate['id']==41): ?>recruit<?php endif; if($cate['id']==43): ?>contact<?php endif; ?>/<?php if($cate['id']==41): ?>recruit<?php endif; if($cate['id']==43): ?>contact<?php endif; ?>/cateid/<?php echo $cate['id']; endif; ?>"><?php echo $cate['cate_name']; ?></a>
						<?php if($cate['children'] != 0): ?>
						<ul class="nav_second">
							<?php foreach($cate['children'] as $v2): ?>
							<li><a href="http://127.0.0.1/milk/public/index.php/home/<?php if($cate['id']==39): ?>about<?php endif; if($cate['id']==40): ?>products<?php endif; if($cate['id']==42): ?>news<?php endif; ?>/
						<?php if($v2['id']==44||$v2['id']==45||$v2['id']==46||$v2['id']==47): ?>about<?php endif; if($v2['id']==48||$v2['id']==49||$v2['id']==50||$v2['id']==51||$v2['id']==52||$v2['id']==53||$v2['id']==54): ?>product_list<?php endif; if($v2['id']==57): ?>news_list<?php endif; ?>
						/cateid/<?php echo $v2['id']; ?>"><?php echo $v2['cate_name']; ?></a></li>
							<?php endforeach; ?>
						</ul>
						<?php endif; ?>
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>

<!--商品列表 -->
	<div class="container recruit">
<!-- 插入图片 -->
		<div class="row pic">
			<img src="__HOME__/images/105288_medias_20151123_20151123bannersocial.jpg" alt="">
		</div>
		<div class="row">
			<div class="col-md-3">
				<ul class="nav nav-pills nav-stacked">
					<li><h3>职位类型</h3></li>
					<li><a href="">产品类</a></li>
					<li><a href="">运营类</a></li>
					<li><a href="">技术类</a></li>
					<li><a href="">职能类</a></li>
					<li><a href="">市场销售类</a></li>
				</ul>
			</div>
			<div class="col-md-9 content">
				<div class="row">
					<div class="col-md-12">
						<h3>职位搜索</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
					</div>
					<div class="col-md-8">
						<form action="">
							<div class="input-group">
								<input type="text">
								<input type="submit" value="搜索">
							</div>
						</form>
					</div>
					<div class="col-md-2">
					</div>
				</div>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<ul class="nav">
							<li><a href="">全部</a></li>
							<li><a href="">产品类</a></li>
							<li><a href="">运营类</a></li>
							<li><a href="">技术类</a></li>
							<li><a href="">职能类</a></li>
							<li><a href="">市场销售类</a></li>
						</ul>
					</div>
					<div class="col-md-2"></div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<table class="table">
							<tr class="success">
								<th>职位名称</th>
								<th>职位类型</th>
								<th>工作地点</th>
								<th>发布时间</th>
								<th>操作</th>
							</tr>
							<tr>
								<td><a href=""> 消费者需求研究员</a></td>
								<td>技术类</td>
								<td>石家庄</td>
								<td>2017-08-28</td>
								<td><a href="" class="btn btn-primary">立即申请</a></td>
							</tr>
							<tr>
								<td><a href=""> 消费者需求研究员</a></td>
								<td>技术类</td>
								<td>石家庄</td>
								<td>2017-08-28</td>
								<td><a href="" class="btn btn-primary">立即申请</a></td>
							</tr><tr>
								<td><a href=""> 消费者需求研究员</a></td>
								<td>技术类</td>
								<td>石家庄</td>
								<td>2017-08-28</td>
								<td><a href="" class="btn btn-primary">立即申请</a></td>
							</tr>
							<tr>
								<td><a href=""> 消费者需求研究员</a></td>
								<td>技术类</td>
								<td>石家庄</td>
								<td>2017-08-28</td>
								<td><a href="" class="btn btn-primary">立即申请</a></td>
							</tr>		
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- 尾部分 -->
	<div class="container footer">
		<div class="row">
			<div class="list-group">
				<div class="list-group-item link">
					<span>友情链接</span>
					<a href="">支付宝 | </a>
					<a href="">微信 | </a>
					<a href="">淘宝 | </a>
					<a href="">君乐宝集团</a>
				</div>
				<div class="list-group-item info">
					<span>Copyright@2011石家庄君乐宝乳业集团 | </span>
					<span>Copyright © 2015-2025 | </span>
					<span> ICP备案：冀ICP备11023373号 | </span>
					<img src="__HOME__/images/beian.png" alt="">
					<a href="">冀公网安备 13011002000109号</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>