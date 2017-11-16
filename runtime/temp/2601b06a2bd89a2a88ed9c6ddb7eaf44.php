<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"E:\software\wamp\www\milk\public/../application/home\view\news\news_list.html";i:1505302587;s:76:"E:\software\wamp\www\milk\public/../application/home\view\public\header.html";i:1505391976;s:74:"E:\software\wamp\www\milk\public/../application/home\view\public\foot.html";i:1505044302;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>新闻列表</title>
	<link rel="stylesheet" href="__HOME__/css/bootstrap.min.css">
	<link rel="stylesheet" href="__HOME__/css/newslist.css">
	<link rel="stylesheet" href="__HOME__/css/header.css">
	<style>
		#page ul{
			margin-left:50%;
		}
	</style>
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
						<?php if($v2['id']==44||$v2['id']==45||$v2['id']==46||$v2['id']==47): ?>about<?php endif; if($v2['id']==48||$v2['id']==49||$v2['id']==50||$v2['id']==51||$v2['id']==52||$v2['id']==53||$v2['id']==54): ?>product_list<?php endif; if($v2['id']==57||$v2['id']==58||$v2['id']==59): ?>news_list<?php endif; ?>
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

<!-- 新闻主体部分 -->
	<div class="container news">
<!-- 插入图片 -->
		<div class="row pic">
			<img src="__HOME__/images/slogan03.jpg" alt="">
		</div>
<!-- 标题栏 -->
		<div class="row">
			<div class="col-md-3">
				<div class="title">
					<h4><?php echo $res1[0]['cate_name']; ?></h4>
					<ul class="nav nav-pills nav-stacked">
						<li class="active"><a href=""><?php echo $res1[1]['cate_name']; ?></a></li>
						<li><a href=""><?php echo $res1[2]['cate_name']; ?></a></li>
						<li><a href=""><?php echo $res1[3]['cate_name']; ?></a></li>
					</ul>
				</div>
			</div>
<!-- 新闻列表详情 -->
			<div class="col-md-9 list">
				<div class="row item">
					<div class="col-md-4">
						<h2><?php echo $res1[1]['cate_name']; ?></h2>
					</div>
					<div class="col-md-8">
						<form action="">
							<input type="text">
							<input type="submit" value="新闻搜索" class="btn btn-primary">
						</form>
					</div>
				</div>
				<?php if(is_array($res2) || $res2 instanceof \think\Collection || $res2 instanceof \think\Paginator): $i = 0; $__LIST__ = $res2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
				<div class="row item">
					<div class="col-md-10">
						<img src="__HOME__/images/artical_list_nod.gif" alt="">
						<a href="<?php echo url('news/news_details',['id'=>$v['id']]); ?>"><?php echo $v['title']; ?>
						</a>
					</div>
					<div class="col-md-2">
						<span><?php echo date("Y-m-d",$v['addtime']); ?></span>
					</div>
				</div>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
<!-- 分页-->
		<div id="page">
			<?php echo $res2->render(); ?>
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