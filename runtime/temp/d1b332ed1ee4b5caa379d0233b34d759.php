<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"E:\software\wamp\www\milk\public/../application/home\view\news\news_details.html";i:1505303959;s:76:"E:\software\wamp\www\milk\public/../application/home\view\public\header.html";i:1505297928;s:74:"E:\software\wamp\www\milk\public/../application/home\view\public\foot.html";i:1505044302;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>新闻详情</title>
	<link rel="stylesheet" href="__HOME__/css/bootstrap.min.css">
	<link rel="stylesheet" href="__HOME__/css/newsdetail.css">
	<link rel="stylesheet" href="__HOME__/css/index.css">
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
					<h4>快速导航</h4>
					<ul class="nav nav-pills nav-stacked">
						<li><a href="">文化景区</a></li>
						<li><a href="">关于君乐宝</a></li>
						<li><a href="">新闻中心</a></li>
						<li><a href="">品质保证</a></li>
						<li><a href="">产品家族</a></li>
						<li><a href="">人力资源</a></li>
						<li><a href="">在线招标</a></li>
					</ul>
				</div>
			</div>
<!-- 新闻详情 -->
			<div class="col-md-9 content">
<!-- 新闻标题 -->
				<div class="item" style="border:none;border-radius:0px;border-bottom:2px solid #eee">
					<span><?php echo $res['0']['title']; ?></span>
				</div>
<!-- 新闻正文 -->
				<div>
					<p>
						<?php echo $res['0']['content']; ?>
					</p>
					<p>
						<img src="http://127.0.0.1/milk/public/<?php echo $res['0']['thumb']; ?>" alt="">
					</p>
					<p>
						<?php echo $res['0']['content']; ?>
					</p>
					<p>
						<?php echo $res['0']['content']; ?>
					</p>
					<p>
						<img src="http://127.0.0.1/milk/public/<?php echo $res['0']['thumb']; ?>" alt="">
					</p>
					<p>
						<?php echo $res['0']['content']; ?>
					</p>
				</div>
<!-- 新闻评论 -->
				<div class="comment">
					<div class="row">
						<div class="col-md-4 comment_title_fl">
							<span>网友评论 | </sapn>
							<a href=""><span class="manage">跟帖管理 | </span></a>
							<a href=""><span>举报</span></a>
						</div>
						<div class="col-md-4"></div>
						<div class="col-md-4 comment_title_fr">
							<a href="">9</a>条评论 / 
							<a href="">26</a>人参与
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<textarea placeholder="文明上网"></textarea>
							<button type="submit" class="btn btn-danger fr">发表评论</button>	
							<span class="comment_login1">一键登录：</span><a href="" class="comment_login2">君乐宝账户</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="comment_list">
								<h3>最热评论</h3>
								<div>
									<div class="comment_list_title">
										<a href="">天天天蓝蓝蓝</a>
										<span style="color:#666">[北京市网友]</span>
									</div>
									<div class="comment_list_content">君乐宝乳业集团现场为新华区17所中小学校捐赠学生奶3500提，总价值21万余元，
									</div>
									<div class="comment_list_bottom clearfix">
										<div class="fl">
											<span>2017-08-30 16:01</span>
										</div>
										<div class="fr">
											<a href="">推荐 <span>4</span> </a> / 
											<a href="">回复 </a> / 
											<a href="">举报 </a> 
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 comment_footer">
							<a href="">查看更多评论>></a>
						</div>
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