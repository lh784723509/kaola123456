<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"E:\software\wamp\www\milk\public/../application/home\view\contact\contact.html";i:1505133385;s:76:"E:\software\wamp\www\milk\public/../application/home\view\public\header.html";i:1505297928;s:74:"E:\software\wamp\www\milk\public/../application/home\view\public\foot.html";i:1505044302;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>联系我们</title>
	<link rel="stylesheet" href="__HOME__/css/bootstrap.min.css">
	<link rel="stylesheet" href="__HOME__/css/contactus.css">
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
						<?php if($v2['id']==44): ?>about<?php endif; if($v2['id']==48): ?>product_list<?php endif; if($v2['id']==57): ?>news_list<?php endif; ?>
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
			<img src="__HOME__/images/slogan01.jpg" alt="">
		</div>
<!-- 标题栏 -->
		<div class="row">
			<div class="col-md-3">
				<div class="title">
					<h4>关于君乐宝</h4>
					<ul class="nav nav-pills nav-stacked">
						<li><a href="">企业简介</a></li>
						<li><a href="">领导关怀</a></li>
						<li><a href="">企业文化</a></li>
						<li><a href="">企业历程</a></li>
						<li><a href="">	荣誉事迹</a></li>
						<li><a href="">销售网络</a></li>
						<li class="active"><a href="">联系我们</a></li>
					</ul>
				</div>
			</div>
<!-- 新闻详情 -->
			<div class="col-md-9 content">
				<div class="row" >
					<div class="col-md-6">
						<h3>联系我们</h3>
						<p>君乐宝乳业集团拥有专业一流的服务团队，所有人员严格培训考核后才能上岗。同时，君乐宝乳业还开通了400免费服务热线，为消费者了解企业和产品信息提供窗口;君乐宝的专业服务团队会对每一位消费者的咨询给予耐心解答。</p>
						<img src="__HOME__/images/hot_line.gif" alt="">
					</div>
					<div class="col-md-6 contact_r">
						<img src="__HOME__/images/contacts.jpg" alt="">
					</div>
				</div>
				<div class="row info">
					<div class="col-md-12">
						<div>奶粉客户服务热线： 400-600-6611</div>
						<div>液态奶客户服务热线：400-612-8138</div>
						<div>品牌推广：0311-67362705</div>
						<div>新闻采访：0311-67362669</div>
						<div>工业旅游：0311-67362691</div>
						<div>行政办公室：0311-67362666</div>
						<div>人力资源部招聘电话：0311-67362707</div>
						<div>客服邮箱：jlb800@163.com</div>
					</div>
				</div>
				<div class="row info">
					<div class="col-md-12">
						<div>地　　址：河北省石家庄市鹿泉区铜冶镇石铜路36号</div>
						<div>邮　　编：050221</div>
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