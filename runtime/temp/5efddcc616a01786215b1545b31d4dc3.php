<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"E:\software\wamp\www\milk\public/../application/home\view\about\about.html";i:1505133356;s:76:"E:\software\wamp\www\milk\public/../application/home\view\public\header.html";i:1505391837;s:74:"E:\software\wamp\www\milk\public/../application/home\view\public\foot.html";i:1505044302;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>关于我们</title>
	<link rel="stylesheet" href="__HOME__/css/bootstrap.min.css">
	<link rel="stylesheet" href="__HOME__/css/aboutus.css">
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
						<li class="active"><a href="">企业简介</a></li>
						<li><a href="">领导关怀</a></li>
						<li><a href="">企业文化</a></li>
						<li><a href="">企业历程</a></li>
						<li><a href="">	荣誉事迹</a></li>
						<li><a href="">销售网络</a></li>
						<li><a href="">联系我们</a></li>
					</ul>
				</div>
			</div>
<!-- 新闻详情 -->
			<div class="col-md-9 content">
				<div class="item">
					<span>企业简介</span>
				</div>
				<div class="paragraph">	
					<p>
						君乐宝乳业集团成立于1995年，现已成为河北省最大的乳制品加工企业，是农业产业化国家重点龙头企业、国家高新技术企业、国家乳品研发技术分中心，公司现有员工8000余人，在河北、河南、江苏、吉林等地建有16个生产工厂。业务范围包括婴幼儿奶粉、低温酸奶、常温液态奶、牧业等四大板块，建立起涵盖奶业全产业链的运营布局，上下游协同发展，为消费者提供营养、健康、安全的乳制品。2016年完成销售收入80亿元，在行业内居第四位，销售增长率全行业领先。
					</p>
					<p>
						<span>以质量安全为根本，推动全产业链的转型升级。</span>一是奶源升级。君乐宝将自建牧场及收购、控股大型牧场作为企业发展的重点，目前已经在石家庄、保定、邢台等地自建9个大型现代化牧场，原奶主要指标优于美国、日本和欧盟标准。对所有合作的奶牛养殖场、养殖小区，全部采用规模化、标准化、集约化经营管理模式，集中规范化饲养率、机械化挤奶率均达100%。二是生产技术升级。近五年来，先后投资数十亿元，建设高档酸奶加工项目、世界顶级奶粉工厂项目等。其中永盛工厂项目是目前国内规模最大、设备自动化程度最高的高档酸牛奶生产车间。奶粉工厂全面采用国际领先工艺，整合10余个国家、20多项专利、30多家供应商的设备和技术。公司通过了IS09001质量管理体系和IS014001环境管理体系认证，婴幼儿配方奶粉通过国际公认的全球食品安全标准(BRC)AA+顶级认证和IFS国际食品标准认证。
					</p>
					<p>
						<span>以科研创新为动力，实现民族奶业的跨越赶超。</span>君乐宝每年在科研方面投入占总销售额的5%以上，先后完成创新项目150多项。2010年被认定为国家乳品加工技术研发分中心。坚持品质与品牌双轨驱动，率先开发了红枣、沙棘酸奶等系列养生产品;开发出国内首款功能性活性乳酸菌饮料——“每日活菌”;自主研发的“酪爵庄园”欧式酸奶酪是我国首次开发的新鲜奶酪产品，连同纯享酸奶、开啡尔常温酸奶等产品，均在SIAL China 国际食品与饮料展览会上被授予“最佳特别奖”等殊荣。
					</p>
					<p>
						<span>以奶业振兴为使命，践行“好奶粉 中国造”的行业愿景。</span>君乐宝婴幼儿配方奶粉对标国际婴幼儿奶粉生产标准，以“世界级牧场+世界级合作伙伴+世界级工厂+世界级管理体系”的“四个世界级”标准，生产世界级的高品质奶粉，全球率先通过欧盟BRC食品安全全球AA+顶级认证。先后推出了纯金装、白金装、至臻等婴幼儿配方奶粉产品，自2014年推出以来已经赢得了两百多万消费者的信赖。2016年8月8日，君乐宝婴幼儿奶粉正式登陆香港市场销售。
					</p>
					<p>
						2017年1月，习近平总书记考察了君乐宝婴幼儿奶粉生产基地，对企业确保质量安全最优化的做法表示肯定，提出“让祖国的下一代喝上好奶粉，我很重视”。
					</p>
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